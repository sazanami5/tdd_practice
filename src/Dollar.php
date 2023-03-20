<?php

namespace Sazanami5\PhpTdd;

class Dollar extends Monny
{
    public function times(int $multiplier): Monny
    {
        return new Dollar($this->amount * $multiplier, $this->currency);
    }
}
