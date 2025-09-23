<?php

namespace App;

class DeliveryService
{
    public function __construct(
        private string $country,
        private string $type
    ){}

    public function send(
        string $email,
        string $message,
        string $parcelName,
        string $size,
    ) {
        dump('parcel was sent to ' . $email);
    }
}