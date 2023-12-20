<?php

use ale10257\NumberSystems\Aggregator;
use PHPUnit\Framework\TestCase;

class AggregatorTest extends TestCase
{
    public function testCheck()
    {
        for ($j = 1; $j <= 1000; $j++) {
            $numFirst = rand(-1000, 1000);
            $num = $this->createOperation(10, 2, $numFirst);
            for ($i = 2; $i <= 15; $i++) {
                $num = $this->createOperation($i, $i + 1, $num);
            }
            $num = $this->createOperation(16, 10, $num);
            $this->assertTrue($numFirst == $num);
        }
    }

    private function createOperation(int $from, int $to, int|string $num): int|string
    {
        $aggregator = new Aggregator();
        $aggregator->from = $from;
        $aggregator->to = $to;
        $aggregator->num = $num;
        return $aggregator->getResult();
    }
}
