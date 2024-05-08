<?php
/*
$dischi = [
    [
        "title" => "New Jersey",
        "author" => "Bon Jovi",
        "year" => 1988,
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg",
        "genre" => "Rock"
    ],
    [
        "title" => "Live at Wembley 86",
        "author" => "Queen",
        "year" => 1992,
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg",
        "genre" => "Pop"
    ],
    [
        "title" => "Ten\"s Summoner\"s Tales",
        "author" => "Sting",
        "year" => 1993,
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg",
        "genre" => "Pop"
    ],
    [
        "title" => "Steve Gadd band",
        "author" => "Steve Gadd Band",
        "year" => 2018,
        "poster" => "https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg",
        "genre" => "Jazz"
    ],
    [
        "title" => "Brave new World",
        "author" => "Iron Maiden",
        "year" => 2000,
        "poster" => "https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg",
        "genre" => "Metal"
    ],
    [
        "title" => "One more car, one more rider",
        "author" => "Eric Clapton",
        "year" => 2002,
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg",
        "genre" => "Rock"
    ]
];
*/

// recupero i dati dal file dischi.json
$data_string = file_get_contents('dischi.json');

// trasformo il contenuto in formato php; il parametro "true", fa sì che venga trasformato in un array associativo, anziché un oggetto.
$dischi = json_decode($data_string, true);



// comunico che l'output è di tipo json 
header('Content-type: application/json');


// specifico quiale sarà la risposta che verrà visualizzata
$response = [
  'results' => $dischi,
  'success' => true
];

// richiamo il file trasformandolo di nuovo in formato json 
echo json_encode($response);