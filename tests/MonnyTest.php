<?php

namespace Sazanami5\PhpTdd;

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertSame;

class MonnyTest extends TestCase
{
    public function testMultiplication() 
    {
        $five = Monny::dollar(5);
        $this->assertObjectEquals($five->times(2), Monny::dollar(10));
        $this->assertObjectEquals($five->times(3), Monny::dollar(15));
    }

    public function testEquality()
    {
        $this->assertTrue((Monny::dollar(5))->equals(Monny::dollar(5)));
        $this->assertFalse((Monny::dollar(5))->equals(Monny::dollar(4)));
        $this->assertFalse((Monny::franc(5))->equals(Monny::dollar(5)));
    }
    public function testCurrency()
    {
        $this->assertSame('USD', (Monny::dollar(1))->currency());
        $this->assertSame('CHF', (Monny::franc(1))->currency());
    }

    public function testSimpleAddition()
    {
        $sum = (Monny::dollar(5))->plus(Monny::dollar(5));
        $this->assertObjectEquals((Monny::dollar(10)), $sum);
    }
}


