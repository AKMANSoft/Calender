<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'coinbase_response',
        'charge_name',
        'charge_email',
        'charge_phone',
        'customer_name',
        'customer_email',
        'customer_phone',
        'checkout_id',
        'amount',
    ];
}
