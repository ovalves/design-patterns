<?php

namespace Flyweight;

use Flyweight\Characteristic;
use Flyweight\CarColor;

class StoreFlyweight
{
    private array $characteristics = [];

    public function usingCharacteristics(string $brand, string $model, CarColor $color): Characteristic
    {
        $hash = $this->getStoreHash($brand, $model, $color);
        if (!isset($this->characteristics[$hash])) {
            $this->characteristics[$hash] = new Characteristic($brand, $model, $color);
        }

        return $this->characteristics[$hash];
    }

    public function getStoreHash(string $brand, string $model, CarColor $color)
    {
        return base64_decode($brand . $model . $color->name);
    }
}