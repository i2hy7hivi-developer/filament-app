<?php

namespace App\Billing;

use Illuminate\Support\Str;

class PaymentGateway
{
    public function __construct(
        private string $currency
    )
    {}

    public function charge(int $amount)
    {
        return [
            'amount' => $amount,
            'currency' => $this->currency,
            'transaction_id' => Str::random()
        ];
    }
}