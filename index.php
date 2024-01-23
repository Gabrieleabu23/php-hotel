<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HOTEL</title>
</head>
<body>
    
</body>
</html>

<?php 
    // copio l'array dalla consegna 
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    
    ];
    // DEBUG
    // var_dump($hotels);
    foreach($hotels as $indice => $hotel){
        echo'Numero Hotel: '.($indice).' ';
        echo '<h1>' . $hotel["name"] . '</h1>';
        echo ' <span>' . $hotel["description"] . '</span> ';
        if($hotel["parking"]){
            echo ' <span style = color:green>' . 'Parcheggio' . '</span> ';
        }
        else{
            echo ' <span style = color:red>' . 'Parcheggio' . '</span> ';
        }
        echo ' <h3 style=display:inline-block>' .'Voto: '. $hotel["vote"] . '</h3> ';
        echo ' <span style= color: orange>' . 'Dista dal centro: '.$hotel["distance_to_center"] .' km'. '</span> ';
        echo'<br>';
    }
?>