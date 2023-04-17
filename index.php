<?php

require_once __DIR__ . '/Models/Categoria.php';
require_once __DIR__ . '/Models/Prodotti.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Giochi.php';
require_once __DIR__ . '/Models/Accessori.php';

$food = new Cibo('url immagine', 'Royal Canin', 43.99, $dog, 545, ['prosciutto', 'riso']);
$toy = new Giochi('url immagine', 'Topini di peluche', 4.99, $cat, 'morbido con codina in corda', [8.5, 10]);
$accessory = new Accessori('url immagine', 'cartucce filtranti', 2.29, $fish, 'Materiale espanso', []);

var_dump($food);
var_dump($toy);
var_dump($accessory);