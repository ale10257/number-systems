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

    /**
     * @throws \Exception
     */
    public function check(): void
    {
        $this->checkData->check($this->from);
        $this->checkData->check($this->to);
        $this->checkData->equalityTest($this->from, $this->to);
        $this->checkData->checkNum($this->num, $this->from);
    }

    public function getResult(): int|string
    {
        if ($this->to == 10) {
            return $this->to10Number->convert($this->num, $this->from);
        }
        if ($this->from == 10) {
            return $this->from10Number->convert($this->num, $this->to);
        }
        $num = $this->to10Number->convert($this->num, $this->from);
        return $this->from10Number->convert($num, $this->to);
    }
}