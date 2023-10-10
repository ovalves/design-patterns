<?php

namespace AbstractFactory\Concrete;

class PaypalTaxGateway implements TaxGatewayInterface
{
    public function tax(float $tax)
    {
        echo "Tax applied: {$tax}";
    }
}