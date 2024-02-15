<?php

namespace App\Services;
use MercadoPago\SDK;

class MPAuthenticate
{
    public function __construct()
    {
        $mpAccessToken = config('payment.mercadopago.access_token');

        SDK::setAccessToken($mpAccessToken);
    }
}
