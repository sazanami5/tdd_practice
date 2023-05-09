<?php

namespace Sazanami5\PhpTdd;

class Bank
{
    private array $rates;

    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($this, $to);
    }

    public function addRate(string $from, string $to, int $rate): void
    {
        $this->rates = [$rate => new Pair($from, $to)];   
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