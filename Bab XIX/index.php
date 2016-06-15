<?php

require __DIR__.'/vendor/autoload.php';

use Monolog\Logger;

$logger = new Logger('Logger');
$logger->info('Bisa!');

