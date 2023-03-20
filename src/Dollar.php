<?php

namespace Sazanami5\PhpTdd;

class Dollar extends Monny
{
    public function times(int $multiplier): Monny
    {
        return Monny::dollar($this->amount * $multiplier);
    }
}
