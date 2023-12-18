#!/usr/bin/env php
<?php
require_once (__DIR__) . '/vendor/autoload.php';

use ale10257\NumberSystems\Aggregator;
use ale10257\NumberSystems\CheckData;

$checkData = new CheckData();

$from = readline("Из какой системы будет переводить (от 2 до 10): ");
$to = readline("В какую систему будет переводить (от 2 до 10): ");
$num = readline("Введите исходное число: ");

$aggregator = new Aggregator();

$aggregator->from = $from;
$aggregator->to = $to;
$aggregator->num = $num;

try {
    $aggregator->check();
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    return;
}

$aggregator->getResult();
