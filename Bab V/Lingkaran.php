<?php

class Lingkaran
{
    const PI = 3.14;

    public function luas($jariJari)
    {
        return self::PI * $jariJari * $jariJari;//akan mengembalikan nilai hasil dari perkalian
    }
}

$lingkaran = new Lingkaran();

echo 'Luas Lingkaran dengan jari-jari 7 cm adalah '.$lingkaran->luas(7);
