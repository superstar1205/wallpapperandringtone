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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' => 'FACEBOOK_CLIENT_ID',
        'client_secret' => 'FACEBOOK_CLIENT_SECRET',
        'redirect' => 'FACEBOOK_REDIRECT_URL',
    ],
    
    'google' => [
        'client_id' => '1020237374748-ukpon3m51e14db91mbqnin3j5rlhm3jo.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ],

];
