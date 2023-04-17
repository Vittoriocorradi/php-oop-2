<?php

/**
 * Prodotti
 */
class Prodotti{
    private $image;
    public $name;
    private $price;
    public $type;
    
    /**
     * __construct
     *
     * @param  mixed $_image
     * @param  mixed $_name
     * @param  mixed $_price
     * @param  mixed $_type
     * @return void
     */
    public function __construct($_image, $_name, $_price, Categoria $_type)
    {
        $this->image = $_image;
        $this->name = $_name;
        $this->price = $_price;
        $this->type = $_type;
    }

    public function getImage() {
        return $this->image;
    }

    public function getPrice() {
        return $this->price;
    }
}