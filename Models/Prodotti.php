<?php

class Prodotti{
    private $image;
    private $name;
    private $price;
    private $type;

    public function __construct($_image, $_name, $_price, Categoria $_type)
    {
        $this->image = $_image;
        $this->name = $_name;
        $this->price = $_price;
        $this->type = $_type;
    }
}

$dog = new Categoria('Dog');

$prova = new Prodotti('url', 'Cibo per cani', 49.99, $dog);