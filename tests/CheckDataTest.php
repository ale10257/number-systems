<?php


use ale10257\NumberSystems\CheckData;
use PHPUnit\Framework\TestCase;

class CheckDataTest extends TestCase
{
    private CheckData $checkData;

    protected function setUp(): void
    {
        $this->checkData = new CheckData();
    }

    /**
     * @throws Exception
     */
    public function testCheck()
    {
        $this->expectException(Exception::class);
        $this->checkData->check(1);
    }

    /**
     * @throws Exception
     */
    public function testCheck2()
    {
        $this->expectException(Exception::class);
        $this->checkData->check('a');
    }

    /**
     * @throws Exception
     */
    public function testRange()
    {
        $this->assertTrue($this->checkData->check(2));
    }

    /**
     * @throws Exception
     */
    public function testEquality()
    {
        $this->expectException(Exception::class);
        $this->checkData->equalityTest(2, 2);
    }

    public function testCheckNum()
    {
        $this->expectException(Exception::class);
        $this->checkData->checkNum('F', 15);
    }

    /**
     * @throws Exception
     */
    public function testCheckNum2()
    {
        $this->assertTrue($this->checkData->checkNum('F', 16));
    }
}
