<?php

//filename: Hewan/NamaHewan.php

namespace Hewan;

trait NamaHewan
{
    protected $namaHewan;

    public function setName($name)
    {
        $this->namaHewan = $name;
    }

    public function getName()
    {
        return $this->namaHewan;
    }
}

