<?php

namespace Builder;

use Builder\Product\PaymentMethod;

abstract class AbstractPaymentMethodBuilder
{
    protected PaymentMethod $paymentMethod;

    public function __construct()
    {
        $this->reset();
    }

    public function reset()
    {
        $this->paymentMethod = new PaymentMethod();
    }

    public function getPaymentMethod(): PaymentMethod
    {
        return $this->paymentMethod;
    }

    public abstract function buildPaymentMethodType(): AbstractPaymentMethodBuilder;

    public abstract function buildPercentageDiscount(): AbstractPaymentMethodBuilder;

    public abstract function buildLimitDaysRefund(): AbstractPaymentMethodBuilder;
}