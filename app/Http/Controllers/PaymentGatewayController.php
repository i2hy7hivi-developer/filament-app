<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGatewayContract;
use App\Order\Detail as OrderDetail;
use Illuminate\Http\Request;

class PaymentGatewayController extends Controller
{
    public function process(
        OrderDetail $orderDetail,
        PaymentGatewayContract $bankPaymentGateway
    ) {
        $orderDetail->get();
        dd($bankPaymentGateway->charge(504));
    }
}
