<?php

class MagicMethod3
{
    private $data = array();

    public function __set($property, $value)
    {
        $this->data[$property] = $value;
    }

    public function __get($property)
    {
        return $this->data[$property];
    }

    public function __toString()
    {
        return 'AKU BISA DI PRINT';
    }

    public function getData()
    {
        return $this->data;
    }
}

$magic = new MagicMethod3();
echo $magic;
echo PHP_EOL;

