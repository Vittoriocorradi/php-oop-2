<?php

/**
 * Categoria
 */
class Categoria{
    public $type;
    
    /**
     * __construct
     *
     * @param  mixed $_type
     * @return void
     */
    public function __construct($_type)
    {
        $this->type = $_type;
    }
}

$dog = new Categoria('Cane');
$cat = new Categoria('Gatto');
$fish = new Categoria('Pesce');
$bird = new Categoria('Uccello');