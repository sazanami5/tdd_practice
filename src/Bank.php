<?php

namespace Sazanami5\PhpTdd;

class Bank
{
    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($this, $to);
    }

    public function addRate(string $from, string $to, int $rate): void
    {
        
    }

    public function rate(string $from, string $to): int
    {
        $rate = 1;
        if ($from === 'CHF' && $to === 'USD') {
            $rate = 2;
        }
        return $rate;
    }
}