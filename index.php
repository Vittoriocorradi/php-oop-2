<?php

require_once __DIR__ . '/Models/Categoria.php';
require_once __DIR__ . '/Models/Prodotti.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Giochi.php';
require_once __DIR__ . '/Models/Accessori.php';

try {
    $food1 = new Cibo('url immagine', 'Royal Canin', 43.99, $dog, 545, ['prosciutto', 'riso']);
    $food2 = new Cibo('url immagine', 'Almo Nature', 44.99, $dog, 600, ['manzo', 'cereali']);
    $food3 = new Cibo('url immagine', 'Almo Nature Cat', 34.99, $cat, 400, ['tonno', 'pollo', 'prosciutto']);
    $food4 = new Cibo('url immagine', 'Mangime per pesci', 2.95, $fish, 30, ['pesci e sottoprodotti dei pesci', 'cereali', 'lieviti', 'alghe']);
    $accessory1 = new Accessori('url immagine', 'Voliera Wilma', 184.99, $bird, 15500, 'Legno', [83, 67, 153]);
    $accessory2 = new Accessori('url immagine', 'cartucce filtranti', 2.29, $fish, 600, 'Materiale espanso', []);
    $toy1 = new Giochi('url immagine', 'Kong classic', 13.49, $dog, 150, 'galleggia e rimbalza', [8.5, 10]);
    $toy2 = new Giochi('url immagine', 'Topini di peluche', 4.99, $cat, 90, 'morbido con codina in corda', [8.5, 10]);
} catch (Exception $e) {
    echo 'Eccezione: ' . $e->getMessage(); 
}

$foods = array($food1, $food2, $food3, $food4);
$toys = array($toy1, $toy2);
$accessories = array($accessory1, $accessory2);
// var_dump($foods);
// var_dump($food);
// var_dump($toy);
// var_dump($accessory);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Boolshop</title>
</head>

<body>
    <div class="container-xxl p-5">
        <h1>Boolshop</h1>
        <h2 class="mb-3">I nostri prodotti</h2>
        <div class="row gx-3">
            <?php foreach ($foods as $food) { ?>
                <?php require __DIR__ . '/partials/foodCard.php'; ?>
            <?php } ?>
            <?php foreach ($accessories as $accessory) { ?>
                <?php require __DIR__ . '/partials/accessoryCard.php'; ?>
            <?php } ?>
            <?php foreach ($toys as $toy) { ?>
                <?php require __DIR__ . '/partials/toyCard.php'; ?>
            <?php } ?>
        </div>
    </div>
</body>

</html>