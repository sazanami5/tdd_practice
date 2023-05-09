<?php

namespace Sazanami5\PhpTdd;

class Pair
{
    function __construct(readonly string $from, readonly string $to)
    {
    }

    public function equals(Pair $pair): bool
    {
        return $this->from === $pair->from
            && $this->to   === $pair->to;
    }
    
    public function hashCode(): int {
        return 0;
    }
}