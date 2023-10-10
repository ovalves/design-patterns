<?php

namespace AbstractFactory\Concrete;

class PaypalPaymentGateway implements PaymentGatewayInterface
{
    public function pay(float $value)
    {
        echo "Amount paid: {$value}";
    }
}