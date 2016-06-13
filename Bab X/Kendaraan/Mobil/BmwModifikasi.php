<?php

//filename: Kendaraan/Mobil/BmwModifikasi.php

namespace Kendaraan\Mobil;

class BmwModifikasi extends Bmw
{
    private $rodo;

    public function setJumlahRoda($jumlahRoda)
    {
        $this->rodo = $jumlahRoda;
    }   
}

