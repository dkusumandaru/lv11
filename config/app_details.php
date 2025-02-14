<?php

return [

    'name' => env('APP_DETAILS_NAME', 'APPS NAME'),
    'version' => env('APP_DETAILS_VERSION', '1.0.0'),
    'favicon' => env('APP_DETAILS_ICON', 'assets/img/jic-logo.png'),
    'logo' => env('APP_DETAILS_ICON', 'assets/img/jic-logo-text.png'),
    'description' => env('APP_DETAILS_DESCRIPTION', 'Information System'),
    'author' => env('APP_DETAILS_AUTHOR', 'Aloisius and Teams'),
    'contact_email' => env('APP_DETAILS_CONTACT', 'sawung.galing36@gmail.com'),
    'website' => env('APP_DETAILS_WEBSITE', 'https://jicindonesia.com'),
    'license' => env('APP_DETAILS_LICENSE', 'MIT'),
    'debug_mode' => env('APP_DETAILS_DEBUG', config('app.debug')),
    'timezone' => env('APP_DETAILS_TIMEZONE', config('app.timezone')),

    'features' => [ 
        'user_management' => true,
        'user_authentication' => true,
        'payment_management' => false
    ],

];