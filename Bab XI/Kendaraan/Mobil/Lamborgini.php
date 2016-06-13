<?php

//filename: Lamborgini.php

namespace Kendaraan\Mobil;

class Lamborgini extends Kendaraan
{
    const MEREK = 'Lamborgini';

    public function getMerek()
    {
        return self::MEREK;
    }
}

