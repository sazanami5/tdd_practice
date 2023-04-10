<?php

namespace Sazanami5\PhpTdd;

class Sum implements Expression
{
    public function __construct(
        readonly public Money $augend,
        readonly public Money $addend,
    ) {
    }

    public function reduce(string $to): Money
    {
        $amount = $this->augend->getAmount() + $this->addend->getAmount();
        return new Money($amount, $to);
    }
}
