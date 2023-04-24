<?php

namespace Sazanami5\PhpTdd;

interface Expression
{
    public function reduce(string $to): Money;
}