<?php

trait Weight {
    private $weight;
    
    /**
     * setWeight
     *
     * Restituisci un errore se il peso è uguale o inferiore a 0. Se il valore del peso è superiore a 1000, dividi per 100 e trasforma in kg invece che in g.
     * 
     * @param  float $_weight
     * @return void
     */
    public function setWeight($_weight) {
        if ($_weight <= 0) {
            throw new Exception('Non vendiamo palloncini');
        }
        if ($_weight < 1000) {
            $this->weight = "Peso: {$_weight}g";
        } else {
            $weight_kg = $_weight/1000;
            $this->weight = "Peso: {$weight_kg}kg";
        }
    }

    public function getWeight() {
        return $this->weight;
    }
}