<?php

namespace ale10257\NumberSystems;

class From10Number
{
    public function convert(int|string $num, int $radixTo): int|string
    {
        $getSymbol = new GetSymbol();
        $result = [];
        while (true) {
            $numOld = $num;
            $num /= $radixTo;
            $num = (int)$num;
            if ($num < 1) {
                $result[] = $getSymbol->getValue($numOld);
                break;
            }
            $result[] = $getSymbol->getValue($numOld - ($num * $radixTo));
        }
        return implode('', array_reverse($result));
    }
}