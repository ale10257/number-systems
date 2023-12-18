<?php

namespace ale10257\NumberSystems;

class CheckData
{
    /**
     * @throws \Exception
     */
    public function check($num): void
    {
        $this->rangeCheck((int)$num);
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
    public function checkNum($num, $numberSystem): void
    {
        $digits = str_split($num);
        foreach ($digits as $digit) {
            $digit = (int)$digit;
            if (!($digit < $numberSystem)) {
                throw new \Exception('Данное число неверно для исходной систем счисления');
            }
        }
    }

    /**
     * @throws \Exception
     */
    private function rangeCheck($num): void
    {
        if ($num < 2 || $num > 10) {
            throw new \Exception('Значение должно быть числом в диапазоне от 2 до 10!');
        }
    }
}