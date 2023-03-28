<?php

namespace Sazanami5\PhpTdd;

class Money
{
    protected $amount;
    protected $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency; 
    }
    
    public function equals(Money $Money): bool
    {
        return $this->amount == $Money->amount
        && $this->currency === $Money->currency;
    }

    public static function dollar(int $amount): Money
    {
        return new Money($amount, 'USD');
    }

    public static function franc(int $amount): Money
    {
        return new Money($amount, 'CHF');
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function times(int $multiplier): Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function plus(Money $added): Money
    {
        return new Money($this->amount + $added->amount, $this->currency);
    }
}