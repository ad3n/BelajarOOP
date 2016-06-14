<?php

//filename: ContohStatic.php

class ContohStatic
{
    public static $INI_STATIC = 'STATIC';

    private static $PRIVATE_STATIC_PROPERTY = 'Private Static';

    public static function greeting()
    {
        return 'Selamat pagi...';
    }

    public static function internalStatic()
    {
        return static::$PRIVATE_STATIC_PROPERTY;
    }
}

echo ContohStatic::$INI_STATIC;
echo PHP_EOL;
echo ContohStatic::greeting();
echo PHP_EOL;
echo ContohStatic::internalStatic();
echo PHP_EOL;

