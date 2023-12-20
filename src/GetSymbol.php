<?php

namespace ale10257\NumberSystems;

class GetSymbol
{
    private array $numbers = [
        0, 1, 2, 3, 4, 5, 6, 7, 8, 9
    ];

    private array $letters = [
        'a' => 10,
        'b' => 11,
        'c' => 12,
        'd' => 13,
        'e' => 14,
        'f' => 15,
    ];

    public function getValue(string $num)
    {
        if (is_numeric($num)) {
            if (!in_array($num, $this->numbers)) {
                $arr = array_flip($this->letters);
                return strtoupper($arr[$num]);
            }
            return $num;
        }
        $num = strtolower($num);
        return $this->letters[$num];
    }

    /**
     * @throws \Exception
     */
    public function getDataAsNumber(string $num): array
    {
        $digits = str_split($num);
        $result = [];
        foreach ($digits as $digit) {
            if (is_numeric($digit)) {
                $result[] = $digit;
            } else {
                if (!in_array(strtolower($digit), array_keys($this->letters))) {
                    throw new \Exception('Неизвестный символ ' . $digit);
                }
                $result[] = $this->letters[strtolower($digit)];
            }
        }
        return $result;
    }
}