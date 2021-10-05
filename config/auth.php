<?php

return [

    // 'defaults' => [
    //     'guard' => 'web',
    //     'passwords' => 'users',
    // ],


    // 'guards' => [
    //     'web' => [
    //         'driver' => 'session',
    //         'provider' => 'users',
    //     ],
    // ],

    // 'providers' => [
    //     'users' => [
    //         'driver' => 'eloquent',
    //         'model' => App\Models\User::class,
    //     ],
    //     'admins' => [
    //         'driver' => 'eloquent',
    //         'model' => App\Models\Admin::class,
    //     ],

    // ],

    // 'passwords' => [
    //     'users' => [
    //         'provider' => 'users',
    //         'table' => 'password_resets',
    //         'expire' => 60,
    //         'throttle' => 60,
    //     ],
    //     'admins' => [
    //         'provider' => 'admins',
    //         'table' => 'password_reset',
    //         'expire' => 60,
    //     ],
    // ],

    // 'password_timeout' => 10800,

        'defaults' => [
            'guard' => 'web',
            'passwords' => 'users',
        ],
    
        'guards' => [
            'web' => [
                'driver' => 'session',
                'provider' => 'users',
            ],
    
            'api' => [
                'driver' => 'token',
                'provider' => 'users',
            ],
            'admin' => [
                'driver' => 'session',
                'provider' => 'admins',
            ],
        ],
    
        'providers' => [
            'users' => [
                'driver' => 'eloquent',
                'model' => App\Models\User::class,
            ],
    
            'admins' => [
                'driver' => 'eloquent',
                'model' => App\Models\Admin::class,
            ],
            // 'users' => [
            //     'driver' => 'database',
            //     'table' => 'users',
            // ],
        ],
    
        'passwords' => [
            'users' => [
                'provider' => 'users',
                'table' => 'password_resets',
                'expire' => 60,
            ],
            'admins' => [
                'provider' => 'admins',
                'table' => 'password_reset',
                'expire' => 60,
            ],
        ],
    
    
    ];


