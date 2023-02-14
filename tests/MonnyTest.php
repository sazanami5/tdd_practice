<?php

namespace Sazanami5\PhpTdd;

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertSame;

class MonnyTest extends TestCase
{
    public function testMultiplication() 
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertObjectEquals($product, new Dollar(10));
        $product = $five->times(3);
        $this->assertObjectEquals($product, new Dollar(15));
    }

    public function testEquality()
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(4)));
    }
}
