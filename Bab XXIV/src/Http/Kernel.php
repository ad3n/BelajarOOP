<?php

namespace BelajarOOP\Framework\Http;

use BelajarOOP\Framework\Application;
use BelajarOOP\Framework\Event\FilterRequestEvent;
use BelajarOOP\Framework\Event\FilterResponseEvent;
use InvalidArgumentException;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class Kernel implements HttpKernelInterface
{
    private $router;

    private $eventDispatcher;

    public function __construct()
    {
        //Symfony Route Collection
        $this->router = new RouteCollection();

        //Event Dispatcher
        $this->eventDispatcher = new EventDispatcher();
    }

    public function handle(Request $request, $type = self::MASTER_REQUEST, $catch = true)
    {
        $filterRequest = new FilterRequestEvent();
        $filterRequest->setRequest($request);

        //Add Filter Query Event
        $this->eventDispatcher->dispatch(Application::PRE_REQUEST_EVENT, $filterRequest);

        if ($response = $filterRequest->getResponse()) {
            return $response;
        }

        //Request Context
        $context = new RequestContext();
        $context->fromRequest($request);

        //Url Matcher
        $matcher = new UrlMatcher($this->router, $context);

        try {
            //Matching Url and Getting Route
            $attributes = $matcher->match($request->getPathInfo());

            //Get Controller from Route attribute @see `route()` method
            $controller = $attributes['_controller'];

            unset($attributes['_controller']);

            //Make it simple, use call_user_func_array to calling controller and passing attributes as parameter
            $response = call_user_func_array($controller, $attributes);

            $filterResponse = new FilterResponseEvent();
            $filterResponse->setResponse($response);

            //Add Filter Response Event
            $this->eventDispatcher->dispatch(Application::PRE_RESPONSE_EVENT, $filterResponse);

            $response = $filterResponse->getResponse();
        } catch (ResourceNotFoundException $e) {
            $response = new Response('Not found!', Response::HTTP_NOT_FOUND);
        }

        return $response;
    }

    public function route($path, $controller)
    {
        if (!is_callable($controller)) {
            throw new \InvalidArgumentException(sprintf('%s is not callable.', $controller));
        }
        $this->router->add($path, new Route(
            $path,
            array('_controller' => $controller)
        ));
    }

    public function on($event, $callback)
    {
        if (! is_callable($callback)) {
            throw new InvalidArgumentException(sprintf('%s is not callable.', $callback));
        }

        $this->eventDispatcher->addListener($event, $callback);
    }
}
