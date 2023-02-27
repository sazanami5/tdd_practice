<?php

namespace Sazanami5\PhpTdd;

class Franc
{
    private $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }

    function equals(Franc $Franc): bool
    {
        return $this->amount == $Franc->amount;
    }
}