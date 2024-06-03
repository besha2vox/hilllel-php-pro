<?php

namespace TaxiSystem\Factory;

use TaxiSystem\Taxi\Taxi;
use TaxiSystem\Taxi\EconomyTaxi;
class EconomyTaxiFactory implements TaxiFactory
{
    public function createTaxi(): Taxi
    {
        return new EconomyTaxi();
    }
}