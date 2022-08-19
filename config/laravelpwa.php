<?php

return [
    'name' => 'Mitra Kargo',
    'manifest' => [
        'name' => env('Mitra Kargo', 'Mitra Kago'),
        'short_name' => 'Mitrakargo',
        'start_url' => '/',
        'background_color' => '#df7212f6',
        'theme_color' => '#df7212f6',
        'display' => 'standalone',
        'orientation' => 'potrait-primary',
        'status_bar' => 'black',
        'icons' => [
            '72x72' => [
                'path' => '/img/icon/manifest/MKG WHITE 48X48.png',
                'purpose' => 'any'
            ],
            '96x96' => [
                'path' => '/images/icons/MKG WHITE 96x96.png',
                'purpose' => 'any'
            ],
            '128x128' => [
                'path' => '/images/icons/MKG WHITE 128x128.png',
                'purpose' => 'any'
            ],
            '144x144' => [
                'path' => '/images/icons/MKG WHITE 144x144.png',
                'purpose' => 'any'
            ],
            '152x152' => [
                'path' => '/images/icons/MKG WHITE 152x152.png',
                'purpose' => 'any'
            ],
            '192x192' => [
                'path' => '/images/icons/MKG WHITE 192x192.png',
                'purpose' => 'any'
            ],
            '384x384' => [
                'path' => '/images/icons/MKG WHITE 384x384.png',
                'purpose' => 'any'
            ],
            '512x512' => [
                'path' => '/images/icons/MKG WHITE 512x512.png',
                'purpose' => 'any'
            ],
        ],
        'splash' => [
            '640x1136' => '/images/icons/splash-640x1136.png',
            '750x1334' => '/images/icons/splash-750x1334.png',
            '828x1792' => '/images/icons/splash-828x1792.png',
            '1125x2436' => '/images/icons/splash-1125x2436.png',
            '1242x2208' => '/images/icons/splash-1242x2208.png',
            '1242x2688' => '/images/icons/splash-1242x2688.png',
            '1536x2048' => '/images/icons/splash-1536x2048.png',
            '1668x2224' => '/images/icons/splash-1668x2224.png',
            '1668x2388' => '/images/icons/splash-1668x2388.png',
            '2048x2732' => '/images/icons/splash-2048x2732.png',
        ],
        'shortcuts' => [
            [
                'name' => 'Mitra Kargo',
                'description' => 'Shortcut Link 1 Description',
                'url' => '/',
                'icons' => [
                    "src" => "/images/logo.png",
                    "purpose" => "any"
                ]
            ],
        ],
        'custom' => []
    ]
];
