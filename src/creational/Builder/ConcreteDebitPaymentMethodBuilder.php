<?php

namespace Builder;

use Builder\Product\PaymentTypeEnum;

class ConcreteDebitPaymentMethodBuilder extends AbstractPaymentMethodBuilder
{
    public function buildPaymentMethodType(): AbstractPaymentMethodBuilder
    {
        $this->paymentMethod->setPaymentMethodType(PaymentTypeEnum::DEBIT);
        return $this;
    }

    public function buildPercentageDiscount(): AbstractPaymentMethodBuilder
    {
        $this->paymentMethod->setPercentageDiscount(15.0);
        return $this;
    }

    public function buildLimitDaysRefund(): AbstractPaymentMethodBuilder
    {
        $this->paymentMethod->setLimitDaysRefund(7);
        return $this;
    }
}