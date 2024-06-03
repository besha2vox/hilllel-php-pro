<?php

namespace TaxiSystem\Taxi;
class EconomyTaxi implements Taxi
{
    public function getModel(): string
    {
        return "Rolls-Royce Droptail";
    }

    public function getPrice(): float
    {
        return  100.00;
    }
}