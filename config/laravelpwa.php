<?php

return [
    'name' => 'eFlow Project Management',
    'manifest' => [
        'name' => env('APP_NAME', 'eFlow'),
        'short_name' => 'eFlow',
        'start_url' => '/',
        'background_color' => '#ffffff',
        'theme_color' => '#160873',
        'display' => 'standalone',
        'orientation'=> 'any',
        'status_bar'=> 'black',
        'icons' => [
            '72x72' => [
                'path' => '/public/assets/favicon/android-icon-72x72.png',
                'purpose' => 'any'
            ],
            '96x96' => [
                'path' => '/public/assets/favicon/android-icon-96x96.png',
                'purpose' => 'any'
            ],
            '128x128' => [
                'path' => '/public/assets/favicon/apple-icon-120x120.png',
                'purpose' => 'any'
            ],
            '144x144' => [
                'path' => '/public/assets/favicon/android-icon-144x144.png',
                'purpose' => 'any'
            ],
            '152x152' => [
                'path' => '/public/assets/favicon/apple-icon-152x152.png',
                'purpose' => 'any'
            ],
            '192x192' => [
                'path' => '/public/assets/favicon/android-icon-192x192.png',
                'purpose' => 'any'
            ],
            '384x384' => [
                'path' => '/public/assets/favicon/ms-icon-384x384.png',
                'purpose' => 'any'
            ],
            '512x512' => [
                'path' => '/public/assets/favicon/ms-icon-512x512.png',
                'purpose' => 'any'
            ],
        ],
        'splash' => [
            '640x1136' => '/public/assets/pwa/apple-splash-640x1136.png',
            '750x1334' => '/public/assets/pwa/apple-splash-750x1334.png',
            '828x1792' => '/public/assets/pwa/apple-splash-828x1792.png',
            '1125x2436' => '/public/assets/pwa/apple-splash-1125x2436.png',
            '1242x2208' => '/public/assets/pwa/apple-splash-1242x2208.png',
            '1242x2688' => '/public/assets/pwa/apple-splash-1242x2688.png',
            '1536x2048' => '/public/assets/pwa/apple-splash-1536x2048.png',
            '1668x2224' => '/public/assets/pwa/apple-splash-1668x2224.png',
            '1668x2388' => '/public/assets/pwa/apple-splash-1668x2388.png',
            '2048x2732' => '/public/assets/pwa/apple-splash-2048x2732.png',
        ],
        'shortcuts' => [
            [
                'name' => 'Overview',
                'description' => 'Shortcut Link 1 Description',
                'url' => '/overview',
                'icons' => [
                    "src" => "/public/assets/favicon/android-icon-72x72.png",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Add new task',
                'description' => 'Shortcut Link 2 Description',
                'url' => '/tasks/new'
            ]
        ],
        'custom' => []
    ]
];
