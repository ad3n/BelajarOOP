<?php

//filename: pewarisan1.php

require __DIR__.'/Kendaraan/Mobil/Bmw.php';
require __DIR__.'/Kendaraan/Mobil/BmwModifikasi.php';

use Kendaraan\Mobil\BmwModifikasi;

$bmwModifikasi = new BmwModifikasi(4);

echo $bmwModifikasi->getJumlahRoda();
echo PHP_EOL;

