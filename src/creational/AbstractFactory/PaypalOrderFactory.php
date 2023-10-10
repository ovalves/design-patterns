<?php

namespace AbstractFactory;

use AbstractFactory\Concrete\TaxGatewayInterface;
use AbstractFactory\Concrete\PaymentGatewayInterface;
use AbstractFactory\Concrete\PaypalPaymentGateway;
use AbstractFactory\Concrete\PaypalTaxGateway;

class PaypalOrderFactory implements InterfaceOrderFactory
{
    public function createPaymentGateway(): PaymentGatewayInterface
    {
        return new PaypalPaymentGateway();
    }

    public function createTaxGateway(): TaxGatewayInterface
    {
        return new PaypalTaxGateway();
    }
}