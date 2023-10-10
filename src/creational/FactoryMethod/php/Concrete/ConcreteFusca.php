<?php

namespace FactoryMethod\Concrete;

class ConcreteFusca implements Car
{
    public function driveTo(string $destination): string
    {
        return "Driving to: {$destination}.";
    }
}
