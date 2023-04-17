<?php

require_once __DIR__ . '/Models/Categoria.php';
require_once __DIR__ . '/Models/Prodotti.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Giochi.php';
require_once __DIR__ . '/Models/Accessori.php';

$food = new Cibo('url immagine', 'Royal Canin', 43.99, $dog, 545, ['prosciutto', 'riso']);
$toy = new Giochi('url immagine', 'Topini di peluche', 4.99, $cat, 'morbido con codina in corda', [8.5, 10]);
$accessory = new Accessori('url immagine', 'cartucce filtranti', 2.29, $fish, 'Materiale espanso', []);

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
        <h2>I nostri prodotti</h2>
        <div class="row">
            <div class="col-4 blue">
                <div class="img">
                    <img src="<?php echo $food->getImage(); ?>" alt="<?php echo $food->name; ?>">
                </div>
                <h3><?php echo $food->name; ?></h3>
                <ul>
                    <li><?php echo $food->type->type ?></li>
                    <li><?php echo $food->getPrice(); ?></li>
                    <li><?php echo $food->weight; ?></li>
                    <li><?php echo implode(',',$food->ingredients); ?></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>