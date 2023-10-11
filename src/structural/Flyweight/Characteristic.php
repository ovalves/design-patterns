<?php

namespace Flyweight;

class Characteristic
{
    private string $brand;
    private string $model;
    private CarColor $color;

    public function __construct(string $brand, string $model, CarColor $color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): Characteristic
    {
        $this->brand = $brand;
        return $this;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model): Characteristic
    {
        $this->model = $model;
        return $this;
    }

    public function getColor(): CarColor
    {
        return $this->color;
    }

    public function setColor(CarColor $color): Characteristic
    {
        $this->color = $color;
        return $this;
    }
}