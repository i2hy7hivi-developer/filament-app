<?php

use App\Parcel;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('facade', function () {
    Parcel::send('Book', 'Medium', 'First Facade', 'rhythm@itradicals.com');
});

Route::get('parcel', function() {
    $deliveryService = new App\DeliveryService('India', 'Speed Post');

    $deliveryService->send(
        'rhythm@itradicals.com',
        'Hello Rhythm',
        'Book',
        '16x17x18'
    );
});

Route::get('pages', [\App\Http\Controllers\PageController::class, 'index']);

Route::get('process', [\App\Http\Controllers\PaymentGatewayController::class, 'process']);