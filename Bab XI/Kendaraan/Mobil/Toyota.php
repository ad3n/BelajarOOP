<?php

//filename: Toyota.php

namespace Kendaraan\Mobil;

class Toyota extends Kendaraan
{
    const MEREK = 'Toyota';

    public function getMerek()
    {
        return self::MEREK;
    }
}

