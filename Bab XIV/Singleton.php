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
var_dump($singleton);

