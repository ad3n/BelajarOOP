<?php

//filename: index2.php

require __DIR__.'/Kendaraan/Mobil/Bmw.php';
require __DIR__.'/Kendaraan/Mobil/Lamborgini.php';
require __DIR__.'/Kendaraan/Mobil/Toyota.php';

echo \Kendaraan\Mobil\Bmw::MEREK.PHP_EOL;
echo \Kendaraan\Mobil\Lamborgini::MEREK.PHP_EOL;
echo \Kendaraan\Mobil\Toyota::MEREK.PHP_EOL;

