<?php

//filename: Kendaraan/Mobil/Bmw.php

namespace Kendaraan\Mobil;

class Bmw
{
    const MEREK = 'BMW';

    private $jumlahRoda;

    public function __construct($jumlahRoda)
    {
        $this->setJumlahRoda($jumlahRoda);
    }

    public function setJumlahRoda($jumlahRoda)
    {
        $this->jumlahRoda = $jumlahRoda;
    }

    public function getJumlahRoda()
    {
        return $this->jumlahRoda;
    }
}

