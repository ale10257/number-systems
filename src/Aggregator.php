<?php

namespace ale10257\NumberSystems;

class Aggregator
{
    public int $from;
    public int $to;
    public string|int $num;

    private CheckData $checkData;
    private To10Number $to10Number;
    private From10Number $from10Number;

    public function __construct()
    {
        $this->checkData = new CheckData();
        $this->to10Number = new To10Number();
        $this->from10Number = new From10Number();
    }

    public function check(): void
    {
        $this->checkData->check($this->from);
        $this->checkData->check($this->to);
        $this->checkData->equalityTest($this->from, $this->to);


    }

    public function getResult(): void
    {
        if ($this->to == 10) {
            echo 'Результат: ' . $this->to10Number->convert($this->num, $this->from) . PHP_EOL;
            return;
        }
        if ($this->from == 10) {
            echo 'Результат: ' .  $this->from10Number->convert($this->num, $this->to) . PHP_EOL;
            return;
        }
        $num = $this->to10Number->convert($this->num, $this->from);
        echo 'Результат: ' .  $this->from10Number->convert($num, $this->to) . PHP_EOL;
    }
}