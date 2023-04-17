<?php

/**
 * Cibo
 */
class Cibo extends Prodotti{
    public $weight;
    public $ingredients;
    
    /**
     * __construct
     *
     * @param  mixed $_image
     * @param  mixed $_name
     * @param  mixed $_price
     * @param  mixed $_type
     * @param  mixed $_weight
     * @param  mixed $_ingredients
     * @return void
     */
    public function __construct($_image, $_name, $_price, Categoria $_type, $_weight, $_ingredients)
    {
        parent::__construct($_image, $_name, $_price, $_type);
        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
    }
}