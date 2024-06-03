<?php

namespace TaxiSystem\Taxi;

class StandardTaxi implements Taxi
{
    public function getModel(): string
    {
        return "Koenigsegg Jesko";
    }

    public function getPrice(): float
    {
        return  200.00;
    }
}