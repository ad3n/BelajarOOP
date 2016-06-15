<?php

$tambah = function ($a, $b) 
{
    return $a + $b;
};

echo $tambah(4, 6);
echo PHP_EOL;
var_dump(is_callable($tambah));

