<?php

require_once __DIR__ . '/../Traits/Weight.php';

/**
 * Accessori
 */
class Accessori extends Prodotti{

    use Weight;

    public $materials;
    public $size;
    
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
    public function __construct($_image, $_name, $_price, Categoria $_type, $_weight, $_materials, $_size)
    {
        parent::__construct($_image, $_name, $_price, $_type);
        $this->setWeight($_weight);
        $this->setMaterials($_materials);
        $this->setSize($_size);
    }
    
    /**
     * setMaterials
     *
     * @param  mixed $_materials
     * @return void
     */
    public function setMaterials($_materials) {
        $this->materials = "Materiale: {$_materials}";
    }
    
    /**
     * setNoSize   
     * 
     * Funzione restituisce 'ND' nel caso non fossero presenti dimensioni tre dimensioni            
     *
     * @return void
     */
    public function setSize($_size) {
        if (count($_size) !== 3) {
            $this->size = 'ND';
        } else {
            $this->size = "Dimensioni: L {$_size[0]} - P {$_size[1]} - H {$_size[2]} cm";
        }
    }
}