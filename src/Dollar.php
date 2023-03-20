<?php

namespace Sazanami5\PhpTdd;

class Dollar extends Monny
{
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency; 
    }

    public function times(int $multiplier): Monny
    {
        return Monny::dollar($this->amount * $multiplier);
    }
}
