<?php

namespace App\Order;

use App\Billing\PaymentGatewayContract;

class Detail
{
    public function __construct(
        private PaymentGatewayContract $bankPaymentGateway
    ){}

    public function get(): array
    {
        $this->bankPaymentGateway->setDiscount(20);

        return [
            'name' => 'Rhythm',
            'address' => '100, Sangariya Jodhpur'
        ];
    }
}