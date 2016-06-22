<?php

require __DIR__.'/vendor/autoload.php';

use Factory\Factory;

$factory = new Factory();
$sepeda = $factory->create('sepeda');
$motor = $factory->create('motor');
$mobil = $factory->create('mobil');

echo $sepeda->gas();
echo PHP_EOL;

echo $motor->gas();
echo PHP_EOL;

echo $mobil->gas();
echo PHP_EOL;

