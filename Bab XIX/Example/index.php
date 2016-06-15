<?php

//filename: index.php

require __DIR__.'/vendor/autoload.php';

use Kendaraan\Mobil\Bmw as KendaraanBmw;
use Kendaraan\Mobil\Lamborgini as KendaraanLamborgini;
use Kendaraan\Mobil\Toyota as KendaraanToyota;

use Sparepart\Mobil\Bmw as SparepartBmw;
use Sparepart\Mobil\Lamborgini as SparepartLamborgini;
use Sparepart\Mobil\Toyota as SparepartToyota;

echo KendaraanBmw::MEREK.PHP_EOL;
echo KendaraanLamborgini::MEREK.PHP_EOL;
echo KendaraanToyota::MEREK.PHP_EOL;

echo SparepartBmw::MEREK.PHP_EOL;
echo SparepartLamborgini::MEREK.PHP_EOL;
echo SparepartToyota::MEREK.PHP_EOL;

