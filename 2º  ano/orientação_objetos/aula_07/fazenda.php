<?php

class Animal {
    public $especie;
    public $NumeroPatas;

    function emitirSom() {
        if($this->especie == "Ema") {
            print("Bu-úp!\n");
        }
        elseif ($this->especie = "Porco") {
            print("Hoinc Hoinc!\n");
        }
        elseif ($this->especie = "Cobra") {
            print("Ssssss...");
        }
        elseif ($this->especie = "Baleia") {
            print("Oooo-oooo!");
        }
        elseif ($this->especie = "Aranha") {
            print("Shhhk-shhk!");
        }
    }

    function Andar() {
        if($this->NumeroPatas == 2 || $this->NumeroPatas == 4 || $this->NumeroPatas == 6) {
            print("Esse animal anda.\n");
        }
        elseif ($this->NumeroPatas = 0) {
            print("Esse animal não anda.\n");
        }
    }
}
