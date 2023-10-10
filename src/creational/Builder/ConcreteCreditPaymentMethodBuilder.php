<?php

namespace Builder;

use Builder\Product\PaymentTypeEnum;

class ConcreteCreditPaymentMethodBuilder extends AbstractPaymentMethodBuilder
{
    public function buildPaymentMethodType(): AbstractPaymentMethodBuilder
    {
        $this->paymentMethod->setPaymentMethodType(PaymentTypeEnum::CREDIT);
        return $this;
    }

    public function buildPercentageDiscount(): AbstractPaymentMethodBuilder
    {
        $this->paymentMethod->setPercentageDiscount(10.0);
        return $this;
    }

    public function buildLimitDaysRefund(): AbstractPaymentMethodBuilder
    {
        $this->paymentMethod->setLimitDaysRefund(5);
        return $this;
    }
}