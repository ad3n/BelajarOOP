<?php

//filename: index3.php

require __DIR__.'/Kendaraan/Mobil/Bmw.php';
require __DIR__.'/Kendaraan/Mobil/Lamborgini.php';
require __DIR__.'/Kendaraan/Mobil/Toyota.php';

require __DIR__.'/Sparepart/Mobil/Bmw.php';
require __DIR__.'/Sparepart/Mobil/Lamborgini.php';
require __DIR__.'/Sparepart/Mobil/Toyota.php';


use Kendaraan\Mobil\Bmw;
use Kendaraan\Mobil\Lamborgini;
use Kendaraan\Mobil\Toyota;

use Sparepart\Mobil\Bmw;
use Sparepart\Mobil\Lamborgini;
use Sparepart\Mobil\Toyota;

echo Bmw::MEREK.PHP_EOL;
echo Lamborgini::MEREK.PHP_EOL;
echo Toyota::MEREK.PHP_EOL;

echo Bmw::MEREK.PHP_EOL;
echo Lamborgini::MEREK.PHP_EOL;
echo Toyota::MEREK.PHP_EOL;
