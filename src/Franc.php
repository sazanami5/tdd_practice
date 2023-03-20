<?php

namespace Sazanami5\PhpTdd;

class Franc extends Monny
{
    public function times(int $multiplier): Monny
    {
        return new Franc($this->amount * $multiplier, $this->currency);
    }
}
