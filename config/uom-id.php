<?php

// config for UoMosul/UomIdPackageLaravel
return [
    /*
    |--------------------------------------------------------------------------
    | UOM ID
    |--------------------------------------------------------------------------
    |
    | All configurations used by the UOM ID Auth Service
    |
    */
    'auth' => [
        'uom' => [
            'routes' => [
                'host' => env('UOM_ID_HOST'),
                'login' => env('UOM_ID_LOGIN_URL'),
                'logout' => env('UOM_ID_LOGOUT_URL'),
            ],
            'redirects' => [
                // The following should be route names defined in your laravel code (e.g. "home")
                'login' => 'home',
                'logout' => 'home',
            ],
        ],
    ],
];
