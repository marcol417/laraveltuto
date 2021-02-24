<?php

    // //Facebook 
    // FACEBOOK_CLIENT_ID = 3686187628168607
    // FACEBOOK_CLIENT_SECRET = efbd338d5630eba207d381e274bc9a29
    // FACEBOOK_CLIENT_CALLBACK = https://akilischool.com/callback/facebook



    # Facebook
    FACEBOOK_CLIENT_ID=523349924960945
    FACEBOOK_CLIENT_SECRET=8d7a23cd4fb58451859d84c34a05a9d2
    FACEBOOK_CLIENT_CALLBACK=http://mon-application.test/callback/facebook

    # Google
    GOOGLE_CLIENT_ID=792032373421-u6l1fanhomac0m1gfgfiuco57p1cuor1.apps.googleusercontent.com
    GOOGLE_CLIENT_SECRET=hUrXS9reFz8P_oY90BKhpjwi
    GOOGLE_CLIENT_CALLBACK=https://mon-application.test/callback/google

    #Github
    GITHUB_CLIENT_ID=ff392218cf3022818ef7
    GITHUB_CLIENT_SECRET=fe37883056da24542cd8296ced30cc420022acf6
    GITHUB_CLIENT_CALLBACK=http://mon-application.test/callback/github

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

    'google' => [
        'client_id' = env('GOOGLE_CLIENT_ID'),
        'client_secret' = env('GOOGLE_CLIENT_SECRET'),
        'redirect' = env('GOOGLE_CLIENT_CALLBACK')
    ], 

    'facebook' => [
        'client_id' = env('FACEBOOK_CLIENT_ID'),
        'client_secret' = env('FACEBOOK_CLIENT_SECRET'),
        'redirect' = env('http://mon-application.test/callback/facebook
        ')
    ],

    'github' => [
        'client_id' = env('GITHUB_CLIENT_ID'),
        'client_secret' = env('GITHUB_CLIENT_SECRET'),
        'redirect' = env('GITHUB_CLIENT_CALLBACK')
    ]



];
