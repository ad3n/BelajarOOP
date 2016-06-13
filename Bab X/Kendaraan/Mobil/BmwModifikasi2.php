<?php

//filename: Kendaraan/Mobil/BmwModifikasi.php

namespace Kendaraan\Mobil;

class BmwModifikasi extends Bmw
{
    public function setJumlahRoda($jumlahRoda)
    {
        for ($i=1; $i <= 10; $i++) {
            echo $i.PHP_EOL;
            parent::setJumlahRoda($jumlahRoda);
        }
    }   
}

