<?php

return [


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

    'google' => [
        'client_id' => '1068830446573-r698q2mkr9hh0jtnueod3k6n1rn0oqd8.apps.googleusercontent.com', //USE FROM GOOGLE DEVELOPER ACCOUNT
        'client_secret' => 'a3hL3xMPQTQIbkIS01lMSFmG', //USE FROM GOOGLE DEVELOPER ACCOUNT
        'redirect' => 'http://127.0.0.1:8000/google/callback/'
    ],

    'facebook' => [
        'client_id' => '884791332409556', //USE FROM FACEBOOK DEVELOPER ACCOUNT
        'client_secret' => 'f6ef2fc402aeb722b527512c1494aee1', //USE FROM FACEBOOK DEVELOPER ACCOUNT
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],

];
