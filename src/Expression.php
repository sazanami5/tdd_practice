<?php

namespace Sazanami5\PhpTdd;

interface Expression
{
    public function reduce(Bank $bank,string $to): Money;
}