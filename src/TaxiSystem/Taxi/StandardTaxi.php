<?php

namespace TaxiSystem\Taxi;

class StandardTaxi implements Taxi
{
    public function getModel(): string
    {
        return "Standard";
    }

    public function getPrice(): float
    {
        return  200.00;
    }
}