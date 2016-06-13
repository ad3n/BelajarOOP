<?php

//filename: index.php

require __DIR__.'/Kendaraan/Mobil/Kendaraan.php';
require __DIR__.'/Kendaraan/Mobil/Bmw.php';
require __DIR__.'/Kendaraan/Mobil/Lamborgini.php';
require __DIR__.'/Kendaraan/Mobil/Toyota.php';

use Kendaraan\Mobil\Bmw;
use Kendaraan\Mobil\Lamborgini;
use Kendaraan\Mobil\Toyota;

$bmw = new Bmw();
$lamborgini = new Lamborgini();
$toyota = new Toyota();

$bmw->setJumlahRoda(4);
$lamborgini->setJumlahRoda(6);
$toyota->setJumlahRoda(8);

echo $bmw->getJumlahRoda();
echo PHP_EOL;
echo $lamborgini->getJumlahRoda();
echo PHP_EOL;
echo $toyota->getJumlahRoda();
echo PHP_EOL;
echo $bmw->getMerek();
echo PHP_EOL;
echo $lamborgini->getMerek();
echo PHP_EOL;
echo $toyota->getMerek();
echo PHP_EOL;

