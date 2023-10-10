<?php

namespace FactoryMethod;

use FactoryMethod\Concrete\Car;

interface CarFactory
{
    public function makeCar(string $carModel): Car;
}
