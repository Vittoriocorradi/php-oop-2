<?php

require_once __DIR__ . '/Categoria.php';
require_once __DIR__ . '/Prodotti.php';

class Accessori extends Prodotti{
    private $materials;
    private $size;

    public function __construct($_image, $_name, $_price, Categoria $_type, $_materials, $_size)
    {
        parent::__construct($_image, $_name, $_price, $_type);
        $this->materials = $_materials;
        $this->size = $_size;
    }

    public function setNoSize() {
        if ($this->size === []) {
            $this->size = 'ND';
        }
    }
}