<?php

require_once __DIR__ . '/Categoria.php';
require_once __DIR__ . '/Prodotti.php';

class Giochi extends Prodotti{
    private $feature;
    private $dimensions;

    public function __construct($_image, $_name, $_price, Categoria $_type, $_feature, $_dimensions)
    {
        parent::__construct($_image, $_name, $_price, $_type);
        $this->feature = $_feature;
        $this->dimensions = $_dimensions;
    }
}