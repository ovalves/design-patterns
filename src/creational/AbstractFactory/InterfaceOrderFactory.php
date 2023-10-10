<?php

namespace AbstractFactory;

use AbstractFactory\Concrete\TaxGatewayInterface;
use AbstractFactory\Concrete\PaymentGatewayInterface;

interface InterfaceOrderFactory
{
    public function createPaymentGateway(): PaymentGatewayInterface;

    public function createTaxGateway(): TaxGatewayInterface;
}
