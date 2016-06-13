<?php

//filename: Hewan/Kambing.php

namespace Hewan;

class Kambing implements Hewan
{
    use NamaHewan;

    public function __construct()
    {
        $this->setName('Kambing');
    }
}

