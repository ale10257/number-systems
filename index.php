#!/usr/bin/env php
<?php
require_once (__DIR__) . '/vendor/autoload.php';

use ale10257\NumberSystems\CheckData;
use ale10257\NumberSystems\From10Number;
use ale10257\NumberSystems\To10Number;

$checkData = new CheckData();

$radixFrom = readline("Из какой системы будет переводить (от 2 до 10): ");

try {
    $checkData->check($radixFrom);
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    return;
}

$radixTo = readline("В какую систему будет переводить (от 2 до 10): ");

try {
    $checkData->check($radixTo);
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    return;
}

try {
    $checkData->equalityTest($radixFrom, $radixTo);
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    return;
}

$num = (int)readline("Введите исходное число: ");
try {
    if (!is_int($num)) {
        throw new Exception('Введено нецелое число!');
    }
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    return;
}

try {
    $checkData->checkNum($num, $radixFrom);
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    return;
}

if ($radixTo == 10) {
    $to10Number = new To10Number();
    echo 'Результат: ' . $to10Number->convert($num, $radixFrom) . PHP_EOL;
    return;
}

if ($radixFrom == 10) {
    $from10Number = new From10Number();
    $result = $from10Number->convert($num, $radixTo);
    echo 'Результат: ' .  $from10Number->convert($num, $radixTo) . PHP_EOL;
    return;
}

$to10Number = new To10Number();
$num = $to10Number->convert($num, $radixFrom);

$from10Number = new From10Number();
echo 'Результат: ' .  $from10Number->convert($num, $radixTo) . PHP_EOL;
