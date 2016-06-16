<?php
$loader = require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use BelajarOOP\Framework\Application;
use BelajarOOP\Framework\Event\FilterRequestEvent;

//Grabing request
$request = Request::createFromGlobals();

//Bootstraping
$app = new Application(array('database' => array('host' => 'localhost')));//Contoh config saja tapi tidak dipakai

//Route register
$app->route('/hello/{name}', function ($name) {
    return new Response(sprintf('Hello %s', $name));
});

$app->on(Application::PRE_REQUEST_EVENT, function (FilterRequestEvent $event) {
    if ('/admin' === $event->getRequest()->getPathInfo()) {
        $event->setResponse(new Response('Anda harus login sebagai admin untuk mengakses halaman ini.'));
    }
});

//Request handling
$response = $app->handle($request);

//Send response
$response->send();
