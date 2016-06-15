<?php

$arr = array(1, 2, 3, 4, 5, 6, 7);

$nyempil = 7;

$newArr = array_map(function ($value) use ($nyempil) {
    return $value * $value * $nyempil;
}, $arr);

var_dump($newArr);
