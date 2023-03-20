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

    public static function dollar(int $amount): Dollar
    {
        return new Dollar($amount);
    }
}