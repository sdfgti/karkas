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

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],
    'keycloak' => [
        'base_url' => env('https://localhost:7080/auth'),
        'realm' => env('realm_key'),
        'client_id' => env('laravel-app'),
        'client_secret' => env('aeE7YzlHuSX6HVl1JpkuEdHcbBSzfadA'),
        'redirect' => env('http://localhost:7080/callback'),
        'public_key' => env('-----BEGIN PUBLIC KEY-----\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAyQJNw/te9ovDnxxqyZXFpPCXYvV6/ZFjVlrYj9+Z14pdEmfmtOws3lgjMTWY0jEJbU9ly1+962U9EG5UWiO32YEZHgdoWBdWGoa6pX3Xxu7NXmSP0Df/xN64IQE7i6mgC1TmHIw5bHQyFr12/z0auRD8CK+A0rZqChxT3LschfVv2GnnbrdYK3m7gZ4DkRUz8//hGDXH0sfFq/ZxUVxLWe9DdrezcYEu04TjvRtR6LgnDupxyVsO9JoTrSn9EfkKzEUa7FzEjwxznpltB+wcndy4XddlUVXfa3yUVss5kMWqSfo5pjTAiH0ehkkTUtSd6IMFxYA0BetJYSzT3asChQIDAQAB\n-----END PUBLIC KEY-----'),
        'token_url' => env('KEYCLOAK_BASE_URL') . '/realms/' . env('KEYCLOAK_REALM') . '/protocol/openid-connect/token',
        'logout_url' => env('KEYCLOAK_BASE_URL') . '/realms/' . env('KEYCLOAK_REALM') . '/protocol/openid-connect/logout',
    ],

];
