<?php

namespace Sazanami5\PhpTdd;

class Franc extends Monny
{
    public function times(int $multiplier): Monny
    {
        return new Monny($this->amount * $multiplier, $this->currency);
    }
}
