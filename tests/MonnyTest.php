<?php

namespace Sazanami5\PhpTdd;

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertSame;

class MonnyTest extends TestCase
{
    public function testMultiplication(){
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertSame($product->amount, 10);
        $product = $five->times(3);
        $this->assertSame($product->amount,15);
    }
}
