<?php

namespace TaxiSystem\Factory;

 use TaxiSystem\Taxi\Taxi;
 use TaxiSystem\Taxi\StandardTaxi;

class StandardTaxiFactory implements TaxiFactory
{
    public function createTaxi(): Taxi
    {
        return new StandardTaxi();
    }
}