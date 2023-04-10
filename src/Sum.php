<?php

namespace Sazanami5\PhpTdd;

class Sum implements Expression
{
    public function __construct(
        readonly public Money $augend,
        readonly public Money $addend,
    ) {

    }
}
