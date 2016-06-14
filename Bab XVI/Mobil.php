<?php

//filename: Mobil.php

class Mobil
{
    private $jumlahRoda;

    public function setJumlahRoda($jumlahRoda)
    {
        $this->jumlahRoda = $jumlahRoda;
    }

    public function getJumlahRoda()
    {
        return $this->jumlahRoda;
    }
}

$mobil = new Mobil();
$mobil->setJumlahRoda();
echo $mobil->getJumlahRoda();
echo PHP_EOL;
$mobil->setJumlahRoda(6);
echo $mobil->getJumlahRoda();
echo PHP_EOL;
echo get_current_user();

