<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;
use Illuminate\Http\Request;

class PaymentGatewayController extends Controller
{
    public function process(PaymentGateway $paymentGateway)
    {
        dd($paymentGateway->charge(2500));
    }
}
