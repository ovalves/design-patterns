<?php

namespace Builder;

use Builder\Product\PaymentTypeEnum;

class ConcretePixPaymentMethodBuilder extends AbstractPaymentMethodBuilder
{
    public function buildPaymentMethodType(): AbstractPaymentMethodBuilder
    {
        $this->paymentMethod->setPaymentMethodType(PaymentTypeEnum::PIX);
        return $this;
    }

    public function buildPercentageDiscount(): AbstractPaymentMethodBuilder
    {
        $this->paymentMethod->setPercentageDiscount(30.0);
        return $this;
    }

    public function buildLimitDaysRefund(): AbstractPaymentMethodBuilder
    {
        $this->paymentMethod->setLimitDaysRefund(15);
        return $this;
    }
}