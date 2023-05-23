<?php

namespace Sazanami5\PhpTdd;

class Sum implements Expression
{
    public function __construct(
        readonly public Expression $augend,
        readonly public Expression $addend,
    ) {
    }

    public function reduce(Bank $bank, string $to): Money
    {
        $amount = $this->augend->reduce($bank, $to)->amount
            + $this->addend->reduce($bank, $to)->amount;
        return new Money($amount, $to);
    }
}
