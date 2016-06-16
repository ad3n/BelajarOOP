<?php
$loader = require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use BelajarOOP\Framework\Application;

//Grabing request
$request = Request::createFromGlobals();

//Bootstraping
$app = new Application(array('database' => array('host' => 'localhost')));//Contoh config saja tapi tidak dipakai

//Route register
$app->route('/hello/{name}', function ($name) {
    return new Response(sprintf('Hello %s', $name));
});

//Request handling
$response = $app->handle($request);

//Send response
$response->send();
