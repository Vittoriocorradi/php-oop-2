<?php

/**
 * Giochi
 */
class Giochi extends Prodotti{
    private $feature;
    private $dimensions;
    
    /**
     * __construct
     *
     * @param  mixed $_image
     * @param  mixed $_name
     * @param  mixed $_price
     * @param  mixed $_type
     * @param  mixed $_feature
     * @param  mixed $_dimensions
     * @return void
     */
    public function __construct($_image, $_name, $_price, Categoria $_type, $_feature, $_dimensions)
    {
        parent::__construct($_image, $_name, $_price, $_type);
        $this->feature = $_feature;
        $this->dimensions = $_dimensions;
    }
}