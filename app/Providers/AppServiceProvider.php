<?php

namespace App\Providers;

use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;
use App\Billing\PaymentGatewayContract;
use App\DeliveryService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(PaymentGatewayContract::class, function ($app) {
            if (request()->has('credit')) {
                return new CreditPaymentGateway('USD');
            }
            return new BankPaymentGateway('USD');
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->singleton('Parcel', function () {
            return new DeliveryService('India', 'Speed Post');
        });
    }
}
