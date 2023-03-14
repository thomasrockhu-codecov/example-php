<?php
require 'vendor/autoload.php';

use Calculator\BasicCalculator;

class calculatorTest extends PHPUnit\Framework\TestCase
{
    /**
     * @covers Calculator\BasicCalculator
    */
    public function testAdd()
    {
        $this->assertEquals(BasicCalculator::add(1, 2), 3.0);
    }

    /**
     * @covers Calculator\BasicCalculator
    */
    public function testSubtract()
    {
        $this->assertEquals(BasicCalculator::subtract(1, 2), -1.0);
    }
}
