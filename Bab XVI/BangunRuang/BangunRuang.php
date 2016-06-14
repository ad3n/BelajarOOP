<?php

//filename: BangunRuang/BangunRuang.php

namespace BangunRuang;

class BangunRuang
{
    private $bangunRuang;

    public function add(BangunRuangInterface $bangunRuang)
    {
        $this->bangunRuang[$bangunRuang->getName()] = $bangunRuang;
    }

    public function luasSegitiga($alas, $tinggi)
    {
        $bangun = $this->bangunRuang['SEGITIGA'];
        $bangun->setAlas($alas);
        $bangun->setTinggi($tinggi);

        return $bangun->getLuas();
    }

    public function kelilingSegitiga($sisi)
    {
        $bangun = $this->bangunRuang['SEGITIGA'];
        $bangun->setSisi($sisi);

        return $bangun->getKeliling();
    }

    public function luasPersegi($sisi)
    {
        $bangun = $this->bangunRuang['PERSEGI'];
        $bangun->setSisi($sisi);

        return $bangun->getLuas();
    }

    public function kelilingPersegi($sisi)
    {
        $bangun = $this->bangunRuang['PERSEGI'];
        $bangun->setSisi($sisi);

        return $bangun->getKeliling();
    }
}

