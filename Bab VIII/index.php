<?php

//filename: index.php

require __DIR__.'/Kendaraan/Mobil/Bmw.php';

use Kendaraan\Mobil\Bmw;

$bmw = new Bmw(4);

echo $bmw->getJumlahRoda();
echo PHP_EOL;

