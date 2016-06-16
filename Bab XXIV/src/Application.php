<?php

namespace BelajarOOP\Framework;

use BelajarOOP\Framework\Http\Kernel;

class Application extends Kernel
{
    protected $configs;

    public function __construct(array $configs = array())
    {
        parent::__construct();
        $this->configs = $configs;
    }

    public function setConfig($key, $value)
    {
        $this->configs[$key] = $value;
    }

    public function getConfig($key)
    {
        if (array_key_exists($key, $this->configs)) {
            return $this->configs[$key];
        }

        return null;
    }
}
