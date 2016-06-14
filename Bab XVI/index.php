<?php

require __DIR__.'/BangunRuang/BangunRuangInterface.php';
require __DIR__.'/BangunRuang/AbstractBangunRuang.php';
require __DIR__.'/BangunRuang/Segitiga.php';
require __DIR__.'/BangunRuang/Persegi.php';
require __DIR__.'/BangunRuang/BangunRuang.php';

use BangunRuang\BangunRuangInterface;
use BangunRuang\AbstractBangunRuang;
use BangunRuang\Segitiga;
use BangunRuang\Persegi;
use BangunRuang\BangunRuang;

$segitiga = new Segitiga();
$persegi = new Persegi();

$bangunRuang = new BangunRuang();

$bangunRuang->add($segitiga);
$bangunRuang->add($persegi);

echo $bangunRuang->luasSegitiga(3, 7);
echo PHP_EOL;
echo $bangunRuang->kelilingSegitiga(5);
echo PHP_EOL;

