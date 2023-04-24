<?php

namespace Sazanami5\PhpTdd;

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertSame;

class MoneyTest extends TestCase
{
    public function testMultiplication() 
    {
        $five = Money::dollar(5);
        $this->assertObjectEquals($five->times(2), Money::dollar(10));
        $this->assertObjectEquals($five->times(3), Money::dollar(15));
    }

    public function testEquality()
    {
        $this->assertTrue((Money::dollar(5))->equals(Money::dollar(5)));
        $this->assertFalse((Money::dollar(5))->equals(Money::dollar(4)));
        $this->assertFalse((Money::franc(5))->equals(Money::dollar(5)));
    }
    public function testCurrency()
    {
        $this->assertSame('USD', (Money::dollar(1))->currency());
        $this->assertSame('CHF', (Money::franc(1))->currency());
    }

    public function testSimpleAddition()
    {
        $five = Money::dollar(5);
        $sum  = $five->plus($five);
        $bank = new Bank();
        $reduced = $bank->reduce($sum,'USD');
        $this->assertObjectEquals((Money::dollar(10)), $reduced);
    }
    public function testPlusReturnsSum()
    {
        $five = Money::dollar(5);
        $result  = $five->plus($five);
        $this->assertTrue($result instanceof Sum);
        $this->assertObjectEquals($five, $result->augend);
        $this->assertObjectEquals($five, $result->addend);
    }
    public function testReduceSum()
    {
        $sum = new Sum(Money::dollar(3), Money::dollar(4));
        $bank = new Bank();
        $result = $bank->reduce($sum, 'USD');
        $this->assertObjectEquals(Money::dollar(7), $result);
    }

    public function testReduceMoney()
    {
        $bank = new Bank();
        $result = $bank->reduce(Money::dollar(1), 'USD');
        $this->assertObjectEquals(Money::dollar(1), $result);
    }
}


