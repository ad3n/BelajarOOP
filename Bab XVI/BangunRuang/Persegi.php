<?php

//filename: BangunRuang/Persegi.php

namespace BangunRuang;

class Persegi implements BangunRuangInterface
{
    private $sisi;

    public function setSisi($sisi)
    {
        $this->sisi = (int) $sisi;
    }

    public function getLuas()
    {
        $this->luas = $this->sisi * $this->sisi;
    }

    public function getKeliling()
    {
        $this->keliling = 4 * $this->sisi;
    }

    public function getName()
    {
        return 'PERSEGI';
    }
}

