<?php

//Class
class Mobil
{
    //Property	
    private $jumlahRoda;
    
    //Property
    private $jumlahKursi;

    //Method
    public function setJumlahRoda($jumlahRoda)
    {
        $this->jumlahRoda = $jumlahRoda;
    }

    //Method
    public function setJumlahKursi($jumlahKursi)
    {
        $this->jumlahKursi = $jumlahKursi;
    }
    
    //Method
    public function cetak()
    {
        echo 'Mobil punya '.$this->jumlahRoda.' roda dan '.$this->jumlahKursi.' kursi.';
    }
}

$sedan = new Mobil();//Object
$sedan->setJumlahRoda(4);
$sedan->setJumlahKursi(4);
$sedan->cetak();
echo PHP_EOL;

