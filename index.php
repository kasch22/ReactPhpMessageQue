<?php

use App\Producer;

require 'vendor/autoload.php';

$producer = new Producer();

$producer->fire('get something');
$producer->fire('get something else');
$producer->fire('post something');
$producer->fire('get something again');
$producer->fire('put something');
$producer->fire('post something else');
$producer->fire('delete something');
$producer->fire('put something else');
$producer->fire('delete something else');
