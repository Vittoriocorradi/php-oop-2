<?php

require_once __DIR__ . '/Categoria.php';
require_once __DIR__ . '/Prodotti.php';

class Cibo extends Prodotti{
    private $weight;
    private $ingredients;

    public function __construct($_image, $_name, $_price, Categoria $_type, $_weight, $_ingredients)
    {
        parent::__construct($_image, $_name, $_price, $_type);
        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
    }
}