<?php

declare(strict_types=1);

return [
    'show' => [
        'tab' => [
            'cuisineCat' => 'Tipo de cocina',
            'restaurant' => 'Restaurantes',
        ],
    ],
    'cuisineCat' => [
        'index' => [
            'tab' => [
                'cuisineCat' => 'Tipo de cocina',
                'restaurant' => 'Restaurantes',
            ],
        ],
        'show' => [
            'tab' => [
                'restaurant' => 'Restaurantes',
            ],
        ],
    ],
    'restaurant' => [
        'index' => [
            'tab' => [
                'cuisineCat' => 'Tipo de cocina',
                'restaurant' => 'Restaurantes',
            ],
        ],
        'cuisine' => [
            'index' => [
                'tab' => [
                    'cuisine' => 'Menu',
                    'photo' => 'Foto',
                    'article' => 'Blog',
                    'contact' => 'Contactos',
                    'map' => 'Donde estamos',
                ],
            ],
        ],
    ],
    'tab' => [
        'cuisine' => 'Menu',
        'photo' => 'Foto',
        'article' => 'Blog',
        'contact' => 'Contactos',
        'map' => 'Donde estamos',
        'content' => 'Info',
        'cuisineCat' => 'Cocinas del lugar',
        'restaurant' => 'Restaurantes del lugar',
    ],
    'item' => [
        'cuisine_cat' => 'Cocinas del lugar',
        'restaurant' => 'Restaurantes del lugar',
    ],
];
