<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('process', [\App\Http\Controllers\PaymentGatewayController::class, 'process']);