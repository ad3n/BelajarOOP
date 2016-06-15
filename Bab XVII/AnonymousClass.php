<?php

class Logger
{
    public function log($message)
    {
        echo $message;
    }
}

class Util
{
    private $logger;

    public function setLogger($logger)
    {
        $this->logger = $logger;
    }

    public function log($message)
    {
        $this->logger->log($message);
    }
}

$util = new Util();
$util->setLogger(new Logger());
$util->log('Logging');
echo PHP_EOL;

$util->setLogger(new class {
    public function log($message)
    {
        echo $message;
    }
});
$util->log('Logging Anonymous');
echo PHP_EOL;

