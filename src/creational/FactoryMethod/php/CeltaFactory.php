<?php

namespace FactoryMethod;

use Exception;
use FactoryMethod\Concrete\Car;
use FactoryMethod\Concrete\ConcreteCelta;

class CeltaFactory implements CarFactory
{
    public function makeCar(string $carModel): Car
    {
        if ('celta' == $carModel) {
            return new ConcreteCelta();
        }

        throw new Exception("Car Model \"{$carModel}\" not found.");
    }
}
