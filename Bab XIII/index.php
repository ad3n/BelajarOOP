<?php

//filename: index.php

require __DIR__.'/Hewan/Hewan.php';
require __DIR__.'/Hewan/NamaHewan.php';
require __DIR__.'/Hewan/Singa.php';
require __DIR__.'/Hewan/Kelinci.php';
require __DIR__.'/Hewan/Kambing.php';

use Hewan\Singa;
use Hewan\Kelinci;
use Hewan\Kambing;

$singa = new Singa();
$kelinci = new Kelinci();
$kambing = new Kambing();

echo $singa->getName();
echo PHP_EOL;
echo $kelinci->getName();
echo PHP_EOL;
echo $kambing->getName();
echo PHP_EOL;

