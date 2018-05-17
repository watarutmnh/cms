<?php

Class NumberHelperTest extends \codeception\Test\Unit
{
    public function testWordVersionOfANumber()
    {
        $this->assertEquals('one', \craft\helpers\Number::word(1));
        $this->assertEquals('two', \craft\helpers\Number::word(2));
        $this->assertEquals('three', \craft\helpers\Number::word(3));
        $this->assertEquals('four', \craft\helpers\Number::word(4));
        $this->assertEquals('five', \craft\helpers\Number::word(5));
        $this->assertEquals('six', \craft\helpers\Number::word(6));
        $this->assertEquals('seven', \craft\helpers\Number::word(7));
        $this->assertEquals('eight', \craft\helpers\Number::word(8));
        $this->assertEquals('nine', \craft\helpers\Number::word(9));
    }
}
