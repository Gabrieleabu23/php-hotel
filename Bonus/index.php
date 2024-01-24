<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css" />

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
    echo '<div class="container w-75">';
    echo '<table class="table table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col">Numero Hotel</th>';
    echo '<th scope="col">Nome</th>';
    echo '<th scope="col">Descrizione</th>';
    echo '<th scope="col">Parcheggio</th>';
    echo '<th scope="col">Voto</th>';
    echo '<th scope="col">Distanza dal centro</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($hotels as $indice => $hotel) {
        echo '<tr>';
        echo '<td>' . ($indice + 1) . '</td>';
        echo '<td>' . $hotel["name"] . '</td>';
        echo '<td>' . $hotel["description"] . '</td>';
        echo '<td>' . ($hotel["parking"] ? '<span style="color:green">Si</span>' : '<span style="color:red">No</span>') . '</td>';
        echo '<td>' . $hotel["vote"] . '</td>';
        echo '<td>' . $hotel["distance_to_center"] . ' km' . '</td>';
        echo '</tr>';
    }
    
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
    echo '<br>'
?>