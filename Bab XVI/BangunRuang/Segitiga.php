<?php

//filename: BangunRuang/Segitiga.php

namespace BangunRuang;

class Segitiga extends AbstractBangunRuang
{
    private $alas;

    private $tinggi;

    private $sisi;

    public function setAlas($alas)
    {
        $this->alas = (int) $alas;
    }

    public function setTinggi($tinggi)
    {
        $this->tinggi = (int) $tinggi;
    }

    public function setSisi($sisi)
    {
        $this->sisi = (int) $sisi;
    }

    public function countLuas()
    {
        $this->luas = (1/2) * $this->alas * $this->tinggi;
    }

    public function countKeliling()
    {
        $this->keliling = 3 * $this->sisi;
    }

    public function getName()
    {
        return 'SEGITIGA';
    }
}

