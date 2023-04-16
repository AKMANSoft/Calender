<?php

namespace App\Console\Commands;

use App\Models\Payment;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class UpdateCoinbasePayment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-coinbase-payment';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Coinbase payment in DB.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $payment = Payment::find(1);
        if (!is_null($payment->coinbase_response)) {
            $chargeCode = json_decode($payment->coinbase_response)->code;

            $response = Http::withHeaders([
                'X-CC-API-KEY' => config('services.coinbase-commerce.key'),
                'X-CC-Version' => '2018-03-22'
            ])->get(config('services.coinbase-commerce.base_uri') . "/charges/" . $chargeCode);

            if ($response->successful()) {
                try {
                    $data = $response->json()['data'];
                    $amount = $data['pricing']['local']['amount'];
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
