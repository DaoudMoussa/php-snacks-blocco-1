<?php
//PHP Snack 1:
// Creare un array $matches che contiene dei sotto-array, i quali rappresentano delle partite di basket.
// ogni partita avrà le seguenti caratteristiche:
//  - squadra di casa
//  - squadra ospite
//  - punti fatti dalla squadra di casa
//  - punti fatti dalla squadra ospite
// L'obbiettivo è stampare a schermo tutte le partite utilizzando questo schema:
// [squadra di casa] - [squadra ospite] | [punti squadra di casa] - [punti squadra ospite]
// ad esempio:
// Olimpia Milano - Cantù | 55 - 60

$matches =  [
    [
        "homeTeam" => [
            "name" => "Napoli Basket",
            "points" => "68"
        ],
        "awayTeam" => [
            "name" => "Juve Basket",
            "points" => "3"
        ]
    ],
    [
        "homeTeam" => [
            "name" => "Milano Basket",
            "points" => "45"
        ],
        "awayTeam" => [
            "name" => "Torino Basket",
            "points" => "34"
        ]
    ],
    [
        "homeTeam" => [
            "name" => "Pippo Basket",
            "points" => "46"
        ],
        "awayTeam" => [
            "name" => "Pluto Basket",
            "points" => "78"
        ]
    ],
    [
        "homeTeam" => [
            "name" => "Paperino Basket",
            "points" => "95"
        ],
        "awayTeam" => [
            "name" => "Topolino Basket",
            "points" => "24"
        ]
    ],
    [
        "homeTeam" => [
            "name" => "Italia",
            "points" => "83"
        ],
        "awayTeam" => [
            "name" => "Russia",
            "points" => "64"
        ]
    ],
    [
        "homeTeam" => [
            "name" => "Lakers",
            "points" => "45"
        ],
        "awayTeam" => [
            "name" => "Giugliano Basket",
            "points" => "89"
        ]
    ]
]

for ( $i = 0; $i < count($matches); $i++) {
    echo nl2br($matches[$i]['homeTeam']['name'] . ' - ' . $matches[$i]['awayTeam']['name'] . " | ". $matches[$i]['homeTeam']['points'] . " - " . $matches[$i]['awayTeam']['points'] . "\n") ;
}

?>
