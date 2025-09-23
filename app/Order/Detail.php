<?php

namespace App\Order;

use App\Billing\PaymentGateway;

class Detail
{
    public function __construct(
        private PaymentGateway $paymentGateway
    ){}

    public function get(): array
    {
        $this->paymentGateway->setDiscount(10);

        return [
            'name' => 'Rhythm',
            'address' => '100, Sangariya Jodhpur'
        ];
    }
}