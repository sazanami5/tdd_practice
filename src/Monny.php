<?php

namespace Sazanami5\PhpTdd;

class Monny
{
    protected $amount;

    function equals(Monny $monny): bool
    {
        return $this->amount == $monny->amount;
    }
}