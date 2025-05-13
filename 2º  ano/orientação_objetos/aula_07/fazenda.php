<?php

class Animal {
    public $especie;
    public $NumeroPatas;

    function emitirSom() {
        if($this->especie == "Cachorro") {
            print("Au Au Au!\n");
        }
        elseif ($this->especie = "Porco") {
            print("Hoinc Hoinc!\n");
        }
    }
}
