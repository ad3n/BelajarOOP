<?php

namespace Factory;

class Factory
{
    protected $kendaraan;

    public function __construct()
    {
        $this->kendaraan = array(
            'sepeda' => Sepeda::class,
            'motor' => Motor::class,
            'mobil' => Mobil::class,
        );
    }

    public function create($type)
    {
        if (!array_key_exists($type, $this->kendaraan)) {
            throw new \InvalidArgumentException(sprintf('Kendaraan dengan tipe %s tidak ditemukan', $type));
        }
        $className = $this->kendaraan[$type];

        return new $className();
    }
}

