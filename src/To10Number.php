<?php

namespace ale10257\NumberSystems;

class To10Number
{
    public function convert(int|string $num, int $radixFrom): int
    {
        $checkMinus = new CheckMinus();
        $num = $checkMinus->check($num);
        $getSymbol = new GetSymbol();
        $digits = array_reverse(str_split($num));
        $result = 0;
        foreach ($digits as $key => $digit) {
            $value = $getSymbol->getValue($digit);
            $result += $value * ($radixFrom ** $key);
        }
        return $checkMinus->getNum($result);
    }
}