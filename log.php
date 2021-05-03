<?php

use Alura\DesignPattern\Log\FileLogManager;
use Alura\DesignPattern\Log\StdoutLogManager;

require 'vendor/autoload.php';

$logManager = new FileLogManager(__DIR__ . '/src/Log/log');
$logManager->log('info', 'Testando log manager');
