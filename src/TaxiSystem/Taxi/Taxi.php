<?php

namespace TaxiSystem\Taxi;

interface Taxi
{
    public function getModel(): string;
    public function getPrice(): float;
}