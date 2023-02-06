<?php

namespace Sazanami5\PhpTdd;

class Dollar
{
    public $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }

    function equals(Dollar $dollar): bool
    {
        return $this->amount == $dollar->amount;
    }
}
