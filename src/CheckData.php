<?php

namespace ale10257\NumberSystems;

class CheckData
{
    /**
     * @throws \Exception
     */
    public function check($num): bool
    {
        if (!is_int($num)) {
            throw new \Exception('Основания систем счисления должны быть числом!');
        }
        if ($num < 2 || $num > 16) {
            throw new \Exception('Основание системы счисления должно быть числом в диапазоне от 2 до 16!');
        }
        return true;
    }

    /**
     * @throws \Exception
     */
    public function equalityTest($from, $to): void
    {
        if ($from === $to) {
            throw new \Exception('Основания систем счисления должны быть разными!');
        }
    }

    /**
     * @throws \Exception
     */
    public function checkNum($num, $numberSystem): bool
    {
        $checkMinus = new CheckMinus();
        $num = $checkMinus->check($num);
        $getSymbols = new GetSymbol();
        $digits = $getSymbols->getDataAsNumber($num);
        foreach ($digits as $digit) {
            if (!($digit < $numberSystem)) {
                throw new \Exception('Данное число неверно для исходной систем счисления');
            }
        }
        return true;
    }
}