<?php

namespace TaxiSystem\Factory;

use TaxiSystem\Taxi\Taxi;
use TaxiSystem\Taxi\LuxuryTaxi;

class LuxuryTaxiFactory implements TaxiFactory
{
public function createTaxi(): Taxi
{
    return new LuxuryTaxi();
}
}