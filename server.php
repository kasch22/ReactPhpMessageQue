<?php

use Cocur\BackgroundProcess\Factory;
use React\Socket\ConnectionInterface;

require 'vendor/autoload.php';

echo 'Starting....';

$loop = \React\EventLoop\Factory::create();
$socket = new React\Socket\Server($loop);
$processFactory = new Factory('\Cocur\BackgroundProcess\BackgroundProcess');

$socket->on('connection', function (ConnectionInterface $connection) use ($processFactory) {
    $connection->on('data', function ($data) use ($connection, $processFactory) {
        $command = sprintf('php consume.php "%s"', addslashes($data));
        $processFactory->newProcess($command)->run();

        $connection->close();
    });
});

$socket->listen(4000);
$loop->run();

