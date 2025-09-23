<?php

namespace App\Billing;

use Illuminate\Support\Str;

class CreditPaymentGateway implements PaymentGatewayContract
{
    public function __construct(
        private string $currency,
        private int $discount = 0
    ){}

    public function setDiscount(int $amount)
    {
        $this->discount = $amount;
    }

    public function charge(int $amount)
    {
        $fees = $amount * 0.02;

        return [
            'amount' => $amount,
            'currency' => $this->currency,
            'discount' => $this->discount,
            'fees' => $fees,
            'transaction_id' => Str::random()
        ];
    }
}