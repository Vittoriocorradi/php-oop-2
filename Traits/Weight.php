<?php

trait Weight {
    private $weight;

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