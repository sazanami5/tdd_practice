<?php

namespace Sazanami5\PhpTdd;

class Dollar extends Monny
{
    private $currency;
    public function __construct(int $amount)
    {
        $this->amount = $amount;
        $this->currency = 'USD'; 
    }

    public function times(int $multiplier): Monny
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function currency(): string
    {
        return $this->currency;
    }
}
