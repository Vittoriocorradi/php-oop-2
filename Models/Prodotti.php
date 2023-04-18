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
     * @param  string $_image
     * @param  string $_name
     * @param  float $_price
     * @param  Categoria $_type
     * @return void
     */
    public function __construct($_image, $_name, $_price, Categoria $_type)
    {
        $this->image = $_image;
        $this->name = $_name;
        $this->setPrice($_price);
        $this->type = $_type;
    }

    public function getImage() {
        return $this->image;
    }

    public function getName() {
        return $this->name;
    }
    
    /**
     * setPrice
     * 
     * Restituisci un errore se il prezzo è uguale o inferiore a 0.
     *
     * @param  mixed $_price
     * @return void
     */
    public function setPrice($_price) {
        if ($_price < 0) {
            throw new Exception('Non puoi vendere a prezzo negativo');
        }
        $this->price = "Prezzo: {$_price}€"; 
    }

    public function getPrice() {
        return $this->price;
    }

    public function getType() {
        return $this->type;
    }
}