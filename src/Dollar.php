<?php

namespace Sazanami5\PhpTdd;

class Dollar extends Monny
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Monny
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function currency(): string
    {
        return 'USD';
    }
}
