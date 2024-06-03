<?php

require __DIR__ . '/../vendor/autoload.php';

use TaxiSystem\Factory\TaxiFactory;
use TaxiSystem\Factory\EconomyTaxiFactory;
use TaxiSystem\Factory\StandardTaxiFactory;
use TaxiSystem\Factory\LuxuryTaxiFactory;

function callTaxi(TaxiFactory $factory) {
    $taxi = $factory->createTaxi();
    echo "Model: " . $taxi->getModel() . "\n";
    echo "Price: " . $taxi->getPrice() . "\n";
}

echo "Economy Taxi: \n";
callTaxi(new EconomyTaxiFactory());
echo "Standard Taxi: \n";
callTaxi(new StandardTaxiFactory());
echo "Luxury Taxi: \n";
callTaxi(new LuxuryTaxiFactory());