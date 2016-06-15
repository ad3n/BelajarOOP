<?php

class Util
{
    private $logger;

    public function setLogger($logger)
    {
        $this->logger = $logger;
    }

    public function log()
    {
        $this->logger->log();
    }
}

$util = new Util();
$util->setLogger(new class('Logging Anonymous') {
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function log()
    {
        echo $this->message;
    }
});
$util->log();
echo PHP_EOL;

