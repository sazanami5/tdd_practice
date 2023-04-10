<?php

namespace Sazanami5\PhpTdd;

class Bank
{
    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($to);
    }
}