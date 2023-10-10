<?php

namespace AbstractFactory\Concrete;

interface TaxGatewayInterface
{
    public function tax(float $tax);
}