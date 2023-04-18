<?php

require_once __DIR__ . '/../Traits/Weight.php';

/**
 * Cibo
 */
class Cibo extends Prodotti{

    use Weight;

    private $ingredients;
    
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
        $this->setWeight($_weight);
        $this->ingredients = $_ingredients;
    }

    public function getIngredients() {
        return $this->ingredients;
    }
}