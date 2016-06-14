<?php

class MagicMethod2
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

    public function getData()
    {
        return $this->data;
    }
}

$magic = new MagicMethod2();
$magic->name = 'Ihsan';
var_dump($magic->getData());
echo $magic->name;
echo PHP_EOL;

