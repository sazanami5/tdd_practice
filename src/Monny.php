<?php

namespace Sazanami5\PhpTdd;

abstract class Monny
{
    protected $amount;
    protected $currency;
    abstract public function times(int $multiplier): Monny;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency; 
    }
    
    function equals(Monny $monny): bool
    {
        return $this->amount == $monny->amount
        && $this instanceof $monny;
    }

    public static function dollar(int $amount): Monny
    {
        return new Dollar($amount, 'USD');
    }

    public static function franc(int $amount): Monny
    {
        return new Franc($amount, 'CHF');
    }

    public function currency(): string
    {
        return $this->currency;
    }
}