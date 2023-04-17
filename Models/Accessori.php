<?php

/**
 * Accessori
 */
class Accessori extends Prodotti{
    private $materials;
    private $size;
    
    /**
     * __construct
     *
     * @param  mixed $_image
     * @param  mixed $_name
     * @param  mixed $_price
     * @param  mixed $_type
     * @param  mixed $_materials
     * @param  mixed $_size
     * @return void
     */
    public function __construct($_image, $_name, $_price, Categoria $_type, $_materials, $_size)
    {
        parent::__construct($_image, $_name, $_price, $_type);
        $this->materials = $_materials;
        $this->size = $_size;
        $this->setNoSize();
    }
    
    /**
     * setNoSize               Funzione restituisce 'ND' nel caso non fossero presenti dimensioni
     *
     * @return void
     */
    public function setNoSize() {
        if ($this->size === []) {
            $this->size = 'ND';
        }
    }
}