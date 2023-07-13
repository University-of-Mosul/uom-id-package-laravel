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
            ],
        ],
    ],
];
