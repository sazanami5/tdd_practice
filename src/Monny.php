<?php

namespace Sazanami5\PhpTdd;

class Monny
{
    protected $amount;
    protected $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency; 
    }
    
    public function equals(Monny $monny): bool
    {
        return $this->amount == $monny->amount
        && $this->currency === $monny->currency;
    }

    public static function dollar(int $amount): Monny
    {
        return new Monny($amount, 'USD');
    }

    public static function franc(int $amount): Monny
    {
        return new Monny($amount, 'CHF');
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function times(int $multiplier): Monny
    {
        return new Monny($this->amount * $multiplier, $this->currency);
    }
}