<?php

namespace Builder;

use Builder\Product\PaymentMethod;

class PaymentMethodDirector
{
    private AbstractPaymentMethodBuilder $builder;

    public function __construct(AbstractPaymentMethodBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function changeBuilder(AbstractPaymentMethodBuilder $builder): void
    {
        $this->builder = $builder;
    }

    public function make(): PaymentMethod
    {
        $this->builder->buildPaymentMethodType()
            ->buildPercentageDiscount()
            ->buildLimitDaysRefund();

        return $this->builder->getPaymentMethod();
    }
}