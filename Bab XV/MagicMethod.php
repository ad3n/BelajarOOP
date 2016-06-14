<?php

class MagicMethod
{
    private $name;

    public function __set($property, $value)
    {
        $this->{$property} = $value;
    }

    public function __get($property)
    {
        return $this->{$property};
    }
}

$magic = new MagicMethod();
$magic->name = 'Ihsan';
echo $magic->name;
echo PHP_EOL;

