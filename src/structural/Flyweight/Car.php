<?php

namespace Flyweight;

use Flyweight\Characteristic;

enum CarColor
{
    case RED;
    case BLUE;
    case GREEN;
}

class Car
{
    private string $serialNumber;
    private Characteristic $characteristic;

    public function __construct(string $serialNumber, Characteristic $characteristic)
    {
        $this->serialNumber = $serialNumber;
        $this->characteristic = $characteristic;
    }

    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }

    public function setSerialNumber(string $serialNumber): Car
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    public function getCharacteristic(): Characteristic
    {
        return $this->characteristic;
    }

    public function setCharacteristic(Characteristic $characteristic): Car
    {
        $this->characteristic = $characteristic;
        return $this;
    }
}