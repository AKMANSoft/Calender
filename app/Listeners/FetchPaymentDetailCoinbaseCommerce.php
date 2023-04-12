<?php

namespace App\Listeners;

use App\Events\PaymentProcessed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class FetchPaymentDetailCoinbaseCommerce
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PaymentProcessed $event): void
    {
        $charge = "ads";
        $response = Http::withHeaders([
            'X-CC-API-KEY' => config('services.coinbase-commerce.key'),
            'X-CC-Version' => '2018-03-22'
        ])->get(config('services.coinbase-commerce.base_uri'). "/charges/" . $charge);

        if($response->successful()){

            Log::info('coinbase payment update in database');
        } else {
            Log::error('coinbase paymnet update error : ' . $response->json()['error']['message']);
        }
    }
}
