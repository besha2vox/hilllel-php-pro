<?php

namespace TaxiSystem\Factory;

use TaxiSystem\Taxi\Taxi;

interface TaxiFactory
{
    public function createTaxi(): Taxi;
}