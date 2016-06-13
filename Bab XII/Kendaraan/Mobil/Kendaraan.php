<?php

//filename: Kendaraan/Mobil/Kendaraan.php

namespace Kendaraan\Mobil;

abstract class Kendaraan
{
    private $jumlahRoda;

    abstract public function getMerek();

    final public function setJumlahRoda($jumlahRoda)
    {
        $this->jumlahRoda = $jumlahRoda;
    }

    public function getJumlahRoda()
    {
        return $this->jumlahRoda;
    }
}

