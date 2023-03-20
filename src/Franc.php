<?php

namespace Sazanami5\PhpTdd;

class Franc extends Monny
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
        $this->currency = 'CHF';
    }

    public function times(int $multiplier): Monny
    {
        return new Franc($this->amount * $multiplier);
    }
}
