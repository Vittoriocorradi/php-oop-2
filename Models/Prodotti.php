<?php

/**
 * Prodotti
 */
class Prodotti{
    private $image;
    private $name;
    private $price;
    private $type;
    
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

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getType() {
        return $this->type;
    }
}