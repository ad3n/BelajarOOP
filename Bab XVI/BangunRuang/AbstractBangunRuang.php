<?php

//filename: BangunRuang/AbstractBangunRuang.php

namespace BangunRuang;

abstract class AbstractBangunRuang implements BangunRuangInterface
{
    protected $luas;

    protected $keliling;

    abstract public function countLuas();

    abstract public function countKeliling();

    public function getLuas()
    {
        $this->countLuas();

        return $this->luas;
    }

    public function getKeliling()
    {
        $this->countKeliling();

        return $this->keliling;
    }
}

