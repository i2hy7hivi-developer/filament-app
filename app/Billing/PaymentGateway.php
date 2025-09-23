<?php

namespace App\Billing;

use Illuminate\Support\Str;

class PaymentGateway
{
    public function charge(int $amount)
    {
        return [
            'amount' => $amount,
            'transaction_id' => Str::random()
        ];
    }
}