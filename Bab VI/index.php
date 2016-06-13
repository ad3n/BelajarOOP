<?php

//filename: index.php

require __DIR__.'/Kendaraan/Mobil/Bmw.php';
require __DIR__.'/Kendaraan/Mobil/Lamborgini.php';
require __DIR__.'/Kendaraan/Mobil/Toyota.php';

use Kendaraan\Mobil\Bmw;
use Kendaraan\Mobil\Lamborgini;
use Kendaraan\Mobil\Toyota;

echo Bmw::MEREK.PHP_EOL;
echo Lamborgini::MEREK.PHP_EOL;
echo Toyota::MEREK.PHP_EOL;

