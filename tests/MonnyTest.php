<?php

namespace Sazanami5\PhpTdd;

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertSame;

class MonnyTest extends TestCase
{
    public function testMultiplication(){
        $five = new Dollar(5);
        $five->times(2);
        $this->assertSame($five->amount, 10);
    }
}
