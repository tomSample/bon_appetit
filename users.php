<?php 

// tableau à mettre à jour ultérieurement en ajoutant un ID (probablement avec la création de la bdd)

$users = [
    [
        'role' => 'admin',
        'username' => 'root',
        'email' => 'admin@example.com',
        'password' => '0000',
        

    ],
    
    [
        'role' => 'user',
        'username' => 'user',
        'email' => 'user@example.com',
        'password' => '0000',
        'delivery-address' => [
            [
                'address' => '50 avenue CDG',
                'postal-code' => '67900',
                'city' => 'Clermond-Ferrand',
                'country' => 'France',
            ],
        ],
    ],

    [
        'role' => 'livreur',
        'username' => 'livreur',
        'email' => 'livreur@example.com',
        'password' => '0000',
    ],

    [
        'role' => 'restaurateur',
        'username' => 'restaurateur',
        'email' => 'restaurateur@example.com',
        'password' => '0000',
        'pickup-address' => [
            [
                'address' => '50 avenue CDG',
                'postal-code' => '67900',
                'city' => 'Clermond-Ferrand',
                'country' => 'France',
            ],
        ],
    ],
];