<?php

namespace FactoryMethod\Concrete;

class ConcreteCelta implements Car
{
    public function driveTo(string $destination): string
    {
        return "Driving to: {$destination}.";
    }
}
