<?php

//filename: Singleton.php

class Singleton
{
    private static $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new static();
        }

        return self::$instance;
    }
}

$singleton = Singleton::getInstance();

$singleton = new Singleton();//Error

$clone = clone $singleton;//Error

$serial = serialize($singleton);
$clone = unserialize($serial);//Error

