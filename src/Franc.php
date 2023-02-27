<?php

namespace Sazanami5\PhpTdd;

class Franc extends Monny
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }

    function equals(Monny $monny): bool
    {
        return $this->amount == $monny->amount;
    }
}