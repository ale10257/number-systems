<?php

namespace ale10257\NumberSystems;

class From10Number
{
    public function convert(int $num, int $radixTo): int
    {
        $result = [];
        while (true) {
            $numOld = $num;
            $num /= $radixTo;
            $num = (int)$num;
            if ($num < 1) {
                $result[] = $numOld;
                break;
            }
            $result[] = $numOld - ($num * $radixTo);
        }
        return (int)implode('', array_reverse($result));
    }
}