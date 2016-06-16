<?php

namespace BelajarOOP\Framework\Http;

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

    public function __construct()
    {
        //Symfony Route Collection
        $this->router = new RouteCollection();
    }

    public function handle(Request $request, $type = self::MASTER_REQUEST, $catch = true)
    {
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
}
