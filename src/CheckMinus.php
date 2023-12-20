<?php

namespace ale10257\NumberSystems;

class CheckMinus
{
    private string $minus = '';

    public function check(int|string $num): int|string
    {
        if (str_starts_with($num, '-')) {
            $this->minus = '-';
        }
        return str_replace('-', '', $num);
    }

    public function getNum(int|string $num): string
    {
        return $this->minus . $num;
    }
}