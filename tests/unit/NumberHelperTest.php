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

    public function testWordReturnsOriginalNumberIfGreaterThanNine()
    {
        $this->assertEquals(10, \craft\helpers\Number::word(10));
    }

    public function testUpperAlphaReturnsUppercaseAlphabeticVersionOfANumber()
    {
        $this->assertEquals('A', \craft\helpers\Number::upperAlpha(1));
        $this->assertEquals('B', \craft\helpers\Number::upperAlpha(2));
        $this->assertEquals('C', \craft\helpers\Number::upperAlpha(3));
        $this->assertEquals('D', \craft\helpers\Number::upperAlpha(4));
        $this->assertEquals('E', \craft\helpers\Number::upperAlpha(5));
        $this->assertEquals('F', \craft\helpers\Number::upperAlpha(6));
        $this->assertEquals('G', \craft\helpers\Number::upperAlpha(7));
        $this->assertEquals('H', \craft\helpers\Number::upperAlpha(8));
        $this->assertEquals('I', \craft\helpers\Number::upperAlpha(9));
        $this->assertEquals('J', \craft\helpers\Number::upperAlpha(10));
        $this->assertEquals('K', \craft\helpers\Number::upperAlpha(11));
        $this->assertEquals('L', \craft\helpers\Number::upperAlpha(12));
        $this->assertEquals('M', \craft\helpers\Number::upperAlpha(13));
        $this->assertEquals('N', \craft\helpers\Number::upperAlpha(14));
        $this->assertEquals('O', \craft\helpers\Number::upperAlpha(15));
        $this->assertEquals('P', \craft\helpers\Number::upperAlpha(16));
        $this->assertEquals('Q', \craft\helpers\Number::upperAlpha(17));
        $this->assertEquals('R', \craft\helpers\Number::upperAlpha(18));
        $this->assertEquals('S', \craft\helpers\Number::upperAlpha(19));
        $this->assertEquals('T', \craft\helpers\Number::upperAlpha(20));
        $this->assertEquals('U', \craft\helpers\Number::upperAlpha(21));
        $this->assertEquals('V', \craft\helpers\Number::upperAlpha(22));
        $this->assertEquals('W', \craft\helpers\Number::upperAlpha(23));
        $this->assertEquals('X', \craft\helpers\Number::upperAlpha(24));
        $this->assertEquals('Y', \craft\helpers\Number::upperAlpha(25));
        $this->assertEquals('Z', \craft\helpers\Number::upperAlpha(26));
    }

    public function testLowerAlphaReturnsLowercaseAlphabeticVersionOfANumber()
    {
        $this->assertEquals('a', \craft\helpers\Number::lowerAlpha(1));
        $this->assertEquals('b', \craft\helpers\Number::lowerAlpha(2));
        $this->assertEquals('c', \craft\helpers\Number::lowerAlpha(3));
        $this->assertEquals('d', \craft\helpers\Number::lowerAlpha(4));
        $this->assertEquals('e', \craft\helpers\Number::lowerAlpha(5));
        $this->assertEquals('f', \craft\helpers\Number::lowerAlpha(6));
        $this->assertEquals('g', \craft\helpers\Number::lowerAlpha(7));
        $this->assertEquals('h', \craft\helpers\Number::lowerAlpha(8));
        $this->assertEquals('i', \craft\helpers\Number::lowerAlpha(9));
        $this->assertEquals('j', \craft\helpers\Number::lowerAlpha(10));
        $this->assertEquals('k', \craft\helpers\Number::lowerAlpha(11));
        $this->assertEquals('l', \craft\helpers\Number::lowerAlpha(12));
        $this->assertEquals('m', \craft\helpers\Number::lowerAlpha(13));
        $this->assertEquals('n', \craft\helpers\Number::lowerAlpha(14));
        $this->assertEquals('o', \craft\helpers\Number::lowerAlpha(15));
        $this->assertEquals('p', \craft\helpers\Number::lowerAlpha(16));
        $this->assertEquals('q', \craft\helpers\Number::lowerAlpha(17));
        $this->assertEquals('r', \craft\helpers\Number::lowerAlpha(18));
        $this->assertEquals('s', \craft\helpers\Number::lowerAlpha(19));
        $this->assertEquals('t', \craft\helpers\Number::lowerAlpha(20));
        $this->assertEquals('u', \craft\helpers\Number::lowerAlpha(21));
        $this->assertEquals('v', \craft\helpers\Number::lowerAlpha(22));
        $this->assertEquals('w', \craft\helpers\Number::lowerAlpha(23));
        $this->assertEquals('x', \craft\helpers\Number::lowerAlpha(24));
        $this->assertEquals('y', \craft\helpers\Number::lowerAlpha(25));
        $this->assertEquals('z', \craft\helpers\Number::lowerAlpha(26));
    }

    public function testUpperRomanReturnsUppercaseRomanNumeralNumber()
    {
        $this->assertEquals('M', \craft\helpers\Number::upperRoman(1000));
        $this->assertEquals('CM', \craft\helpers\Number::upperRoman(900));
        $this->assertEquals('D', \craft\helpers\Number::upperRoman(500));
        $this->assertEquals('CD', \craft\helpers\Number::upperRoman(400));
        $this->assertEquals('C', \craft\helpers\Number::upperRoman(100));
        $this->assertEquals('XC', \craft\helpers\Number::upperRoman(90));
        $this->assertEquals('L', \craft\helpers\Number::upperRoman(50));
        $this->assertEquals('XL', \craft\helpers\Number::upperRoman(40));
        $this->assertEquals('X', \craft\helpers\Number::upperRoman(10));
        $this->assertEquals('IX', \craft\helpers\Number::upperRoman(9));
        $this->assertEquals('V', \craft\helpers\Number::upperRoman(5));
        $this->assertEquals('IV', \craft\helpers\Number::upperRoman(4));
        $this->assertEquals('I', \craft\helpers\Number::upperRoman(1));
    }

    public function testLowerRomanReturnsLowercaseRomanNumeralNumber()
    {
        $this->assertEquals('m', \craft\helpers\Number::lowerRoman(1000));
        $this->assertEquals('cm', \craft\helpers\Number::lowerRoman(900));
        $this->assertEquals('d', \craft\helpers\Number::lowerRoman(500));
        $this->assertEquals('cd', \craft\helpers\Number::lowerRoman(400));
        $this->assertEquals('c', \craft\helpers\Number::lowerRoman(100));
        $this->assertEquals('xc', \craft\helpers\Number::lowerRoman(90));
        $this->assertEquals('l', \craft\helpers\Number::lowerRoman(50));
        $this->assertEquals('xl', \craft\helpers\Number::lowerRoman(40));
        $this->assertEquals('x', \craft\helpers\Number::lowerRoman(10));
        $this->assertEquals('ix', \craft\helpers\Number::lowerRoman(9));
        $this->assertEquals('v', \craft\helpers\Number::lowerRoman(5));
        $this->assertEquals('iv', \craft\helpers\Number::lowerRoman(4));
        $this->assertEquals('i', \craft\helpers\Number::lowerRoman(1));
    }

    public function testMakeNumericReturnsNumericValueOfVariable()
    {

    }
}
