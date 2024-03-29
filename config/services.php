<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'recaptcha' => [
        'key' => env('GOOGLE_RECAPTCHA_SITE_KEY'),
        'secret' => env('GOOGLE_RECAPTCHA_SECRET_KEY'),
    ],

    'twitter' => [
        'key' => env('TWITTER_API_KEY'),
        'secret' => env('TWITTER_API_SECRET_KEY'),
        'token' => env('TWITTER_BEARER_TOKEN'),
    ],

    'coinbase-commerce' => [
        'base_uri' => env('COINBASE_COMMERCE_BASE_URI'),
        'key' => env('COINBASE_COMMERCE_API_KEY'),
    ],

    'gohighlevel' => [
        'token' => env('GOHIGHLEVEL_TOKEN'),
    ],
];
