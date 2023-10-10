<?php

namespace Builder\Product;

enum PaymentTypeEnum
{
    case PIX;
    case DEBIT;
    case CREDIT;
}

class PaymentMethod
{
    private PaymentTypeEnum $paymentMethodType;
    private int $limitDaysRefund;
    private float $percentageDiscount;

    public function getPaymentMethodType(): PaymentTypeEnum
    {
        return $this->paymentMethodType;
    }

    public function setPaymentMethodType(PaymentTypeEnum $paymentMethodType): void
    {
        $this->paymentMethodType = $paymentMethodType;
    }

    public function getPercentageDiscount(): float
    {
        return $this->percentageDiscount;
    }

    public function setPercentageDiscount(float $percentageDiscount): void
    {
        $this->percentageDiscount = $percentageDiscount;
    }

    public function getLimitDaysRefund(): int
    {
        return $this->limitDaysRefund;
    }

    public function setLimitDaysRefund(int $limitDaysRefund): void
    {
        $this->limitDaysRefund = $limitDaysRefund;
    }
}