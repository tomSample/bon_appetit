<?php 

// tableau à mettre à jour ultérieurement en ajoutant un ID (probablement avec la création de la bdd)

$users = [
    [
        'role' => 'admin',
        'username' => 'root',
        'email' => 'user@example.com',
        'password' => '0000',
        'delivery-address' => [
            [
                'address' => '13 rue de la Chance',
                'postal-code' => '75020',
                'city' => 'Paris',
                'country' => 'France',
            ],
            [
                'address' => '25 rue de la Liberté',
                'postal-code' => '22300',
                'city' => 'Lannion',
                'country' => 'France',
            ],
        ],

    ],
    
    [
        'role' => 'user',
        'username' => 'user2',
        'email' => 'user2@example.com',
        'password' => '1111',
        'delivery-address' => [
            [
                'address' => '50 avenue CDG',
                'postal-code' => '67900',
                'city' => 'Clermond-Ferrand',
                'country' => 'France',
            ],
        ],
    ],
];