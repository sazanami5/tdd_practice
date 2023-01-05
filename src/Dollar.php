<?php
namespace Sazanami5\PhpTdd;

class Dollar 
{
    public $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times()
    {
        $this->amount = $this->amount * 2;
    }


}