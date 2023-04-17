<?php

require_once __DIR__ . '/Models/Categoria.php';
require_once __DIR__ . '/Models/Prodotti.php';
require_once __DIR__ . '/Models/Cibo.php';
$dog = new Categoria('Cane');
$food = new Cibo('url prodotto', 'Royal Canin', 43.99, $dog, 545, ['prosciutto', 'riso']);

var_dump($food);