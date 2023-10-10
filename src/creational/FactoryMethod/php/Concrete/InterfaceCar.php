<?php

namespace FactoryMethod\Concrete;

interface Car
{
    public function driveTo(string $destination): string;
}