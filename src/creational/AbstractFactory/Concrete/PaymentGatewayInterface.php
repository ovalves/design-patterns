<?php

namespace AbstractFactory\Concrete;

interface PaymentGatewayInterface
{
    public function pay(float $value);
}