<?php

//filename: Kendaraan/Mobil/Bmw.php

namespace Kendaraan\Mobil;

class Bmw extends Kendaraan
{
    const MEREK = 'BMW';

    public function getMerek()
    {
        return self::MEREK;
    }
}

