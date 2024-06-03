<?php

namespace TaxiSystem\Taxi;

class LuxuryTaxi implements Taxi
{
    public function getModel(): string
    {
        return "Daewoo Lanos";
    }

    public function getPrice(): float
    {
        return  300.00;
    }
}