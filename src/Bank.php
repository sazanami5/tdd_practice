<?php

namespace Sazanami5\PhpTdd;

class Bank
{
    public function reduce(Expression $source, string $to): Money
    {
        if($source instanceof Money) {
            return $source;
        }
        return $source->reduce($to);
    }
}