<?php

namespace Sazanami5\PhpTdd;

class Monny
{
    protected $amount;

    function equals(Monny $monny): bool
    {
        return $this->amount == $monny->amount
        && $this instanceof $monny;
    }

    public static function dollar(int $amount): Monny
    {
        return new Dollar($amount);
    }

    public static function franc(int $amount): Monny
    {
        return new Franc($amount);
    }
}