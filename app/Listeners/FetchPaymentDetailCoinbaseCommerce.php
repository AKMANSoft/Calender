<?php

namespace App\Listeners;

use App\Events\PaymentProcessed;
use App\Models\Payment;
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
        $payment = Payment::find($event->payment->id);
        if (!is_null($payment->coinbase_response)) {
            $chargeCode = json_decode($payment->coinbase_response)->code;

            $response = Http::withHeaders([
                'X-CC-API-KEY' => config('services.coinbase-commerce.key'),
                'X-CC-Version' => '2018-03-22'
            ])->get(config('services.coinbase-commerce.base_uri') . "/charges/" . $chargeCode);

            if ($response->successful()) {
                try {
                    $data = $response->json()['data'];
                    $amount = isset($data['payments'][0]) ? $data['payments'][0]['value']['local']['amount'] : null;
                    $checkoutId = $data['checkout']['id'];
                    $chargeName = isset($data['metadata']['name']) ? $data['metadata']['name'] : null;
                    $chargeEmail = isset($data['metadata']['name']) ? $data['metadata']['email'] : null;
                    $chargePhone = isset($data['metadata']['name']) ? $data['metadata']['phone'] : null;
                    $checkoutId = $data['checkout']['id'];

                    $payment->charge_name = $chargeName;
                    $payment->charge_email = $chargeEmail;
                    $payment->charge_phone = $chargePhone;
                    $payment->checkout_id = $checkoutId;
                    $payment->amount = $amount;
                    $payment->save();
                    Log::info('coinbase payment update in database');
                } catch (\Throwable $th) {
                    Log::error('paymnet update error : ' . $th->getMessage());
                }
            } else {
                Log::error('coinbase paymnet update error : ' . $response->json()['error']['message']);
            }
        }
    }
}
