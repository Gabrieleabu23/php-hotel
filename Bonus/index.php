<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
        integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css" />

    <title>PHP HOTEL</title>
</head>

<body>
    <main class="container w-75">
        <div class="col-6">
            <form class="row g-3  align-items-end ">
                <div class="col-5">
                    <label for="validationCustom01" class="form-label">Parcheggio</label>
                    <select class="form-select" id="validationCustom01" name="validationCustom01">
                        <option value="">Tutti</option>
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="col-5">
                    <label for="validationCustom02" class="form-label">Voto</label>
                    <select class="form-select" id="validationCustom02" name="validationCustom02">
                        <option value="">Tutti</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class="col-2">
                    <button class="btn btn-primary" formnovalidate type="submit">Invia</button>
                </div>
            </form>
        </div>
    </main>
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
$scelta = '';
if (isset($_GET['validationCustom01'])&& isset($_GET['validationCustom02'])) {
    $scelta = $_GET['validationCustom01'];
    $voto= $_GET['validationCustom02'];
    if ($scelta != '') {

        echo "The selected option is: " . $scelta;
    }
}
foreach ($hotels as $indice => $hotel) {
    if (
        $scelta === '' ||
        ($scelta === '1' && $hotel['parking']) ||
        ($scelta === '0' && !$hotel['parking']) 
    ) {
        if($hotel['vote'] >= $voto){
        echo '<tr>';
        echo '<td>' . ($indice + 1) . '</td>';
        echo '<td>' . $hotel["name"] . '</td>';
        echo '<td>' . $hotel["description"] . '</td>';
        echo '<td>' . ($hotel["parking"] ? '<span style="color:green">Si</span>' : '<span style="color:red">No</span>') . '</td>';
        echo '<td>' . $hotel["vote"] . '</td>';
        echo '<td>' . $hotel["distance_to_center"] . ' km' . '</td>';
        echo '</tr>';
    }
}
}


echo '</tbody>';
echo '</table>';
echo '</div>';
echo '<br>'
    ?>