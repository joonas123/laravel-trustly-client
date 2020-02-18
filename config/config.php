<?php

return [

    /*
    |--------------------------------------------------------------------------
    | APPLICATION BASE URL
    |--------------------------------------------------------------------------
    |
    | This value is mainly for testing purposes and usually don't need to be
    | changed in production environment
    |
    */    
    'base_url' => env('APP_URL'),

    /*
    |--------------------------------------------------------------------------
    | PATH TO PUBLIC AND PRIVATE KEYS
    |--------------------------------------------------------------------------
    |
    | If the key information is wrong your deposit calls will likely be answered 
    | with 636/ERROR_UNABLE_TO_VERIFY_RSA_SIGNATURE. The default key is 
    | just an example key and is not connected to any account.
    |
    */
    'private_key_path' => storage_path('trustly_keys/private.pem'),
    'public_key_path' => storage_path('trustly_keys/public.pem'),

    /*
    |--------------------------------------------------------------------------
    | USERNAME AND PASSWORD
    |--------------------------------------------------------------------------
    |
    | Give username and password that you use to log in to Trustly's backoffice:
    | trustly.com/backoffice/
    |
    */
    'api_username' => env('TRUSTLY_USERNAME'),
    'api_password' => env('TRUSTLY_PASSWORD'),

    /*
    |--------------------------------------------------------------------------
    | API HOST URL
    |--------------------------------------------------------------------------
    |
    | API host used for communication. Fully qualified hostname.
	| When integrating with our public API this is typically
	| either 'test.trustly.com' or 'trustly.com'.
    |
    */
    'api_url' => env('app_env') == 'production' ? 'trustly.com' : 'test.trustly.com'
    
];