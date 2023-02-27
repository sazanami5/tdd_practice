<?php

namespace Sazanami5\PhpTdd;

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertSame;

class MonnyTest extends TestCase
{
    public function testMultiplication() 
    {
        $five = new Dollar(5);
        $this->assertObjectEquals($five->times(2), new Dollar(10));
        $this->assertObjectEquals($five->times(3), new Dollar(15));
    }
    public function testFrancMultiplication() 
    {
        $five = new Franc(5);
        $this->assertObjectEquals($five->times(2), new Franc(10));
        $this->assertObjectEquals($five->times(3), new Franc(15));
    }

    public function testEquality()
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(4)));
    }
}


