<?php

namespace ale10257\NumberSystems;

class To10Number
{
    public function convert(int $num, int $radixFrom): int
    {
        $digits = array_reverse(str_split($num));
        $result = 0;
        foreach ($digits as $key => $digit) {
            $result += $digit * ($radixFrom ** $key);
        }
        return $result;
    }
}