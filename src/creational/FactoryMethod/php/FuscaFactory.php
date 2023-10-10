<?php

namespace FactoryMethod;

use Exception;
use FactoryMethod\Concrete\Car;
use FactoryMethod\Concrete\ConcreteFusca;

class FuscaFactory implements CarFactory
{
    public function makeCar(string $carModel): Car
    {
        if ('fusca' == $carModel) {
            return new ConcreteFusca();
        }

        throw new Exception("Car Model \"{$carModel}\" not found.");
    }
}
