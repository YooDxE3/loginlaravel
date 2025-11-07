<?php

return [

    'defaults' => [
        'guard' => 'web', // padrão: usuarios
        'passwords' => 'usuarios',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    */
    'guards' => [
        // Guard padrão (usuários)
        'web' => [
            'driver' => 'session',
            'provider' => 'usuarios',
        ],

        // Novo guard para instituições
        'instituicao' => [
            'driver' => 'session',
            'provider' => 'instituicoes',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    */
    'providers' => [
        // Provedor de usuários
        'usuarios' => [
            'driver' => 'eloquent',
            'model' => App\Models\Usuario::class,
        ],

        // Provedor de instituições
        'instituicoes' => [
            'driver' => 'eloquent',
            'model' => App\Models\Instituicao::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Reset de Senha (se quiser usar futuramente)
    |--------------------------------------------------------------------------
    */
    'passwords' => [
        'usuarios' => [
            'provider' => 'usuarios',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],

        'instituicoes' => [
            'provider' => 'instituicoes',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,
];
