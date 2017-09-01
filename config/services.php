<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
  'google' => [
    'client_id' => '604286052414-lm2b9iaedebd99lknsd331srd52ctasp.apps.googleusercontent.com',
    'client_secret' => '3vNgJZ8vsuC2PpUu-_ehm6xT',
    'redirect' => 'http://atestla.dev:8080/public/auth/google/callback',
  ],

  'twitter' => [
    'client_id' => '1tc8EfjSz1xl4bUq3y92v2hm9',
    'client_secret' => '9G4EWt5ipbAjzuGnPtHWKFRnmPpx8YWLo2c4XjQoKUeBgcvFum',
    'redirect' => 'https://b50354e7.ngrok.io/auth/twitter/callback',
  ],

  
];
