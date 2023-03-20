<?php

namespace Sazanami5\PhpTdd;

class Franc extends Monny
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Monny
    {
        return new Franc($this->amount * $multiplier);
    }

    public function currency(): string
    {
        return 'CHF';
    }
}
