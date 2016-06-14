<?php

//filename: Persegi.php

class Persegi
{
    private $sisi;

    public function setSisi(array $sisi)
    {
        $this->sisi = $sisi;
    }

    public function getLuas()
    {
        $luas = array();
        foreach ($this->sisi as $sisi) {
            $luas[] = $sisi * $sisi;
        }

        return $luas;
    }
}

$persegi = new Persegi();
$persegi->setSisi(7);
$luas = $persegi->getLuas();
foreach ($luas as $l) {
    echo $l.PHP_EOL;
}

