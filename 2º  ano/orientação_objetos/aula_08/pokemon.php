<?php

class Pokemon {
    public $nome;
    public $tipo;
    public $experiencia;
    public $hp;
    public $ataque;
    public $defesa;
    public $velocidade;
    public $nivel;

    function __construct($nome){
        $this->experiencia = 0;
        $this->hp = 10;
        $this->ataque = 5;
        $this->defesa = 5;
        $this->velocidade = 5;
        $this->nome = $nome;
        $this->nivel = 1;
    }

    function batalhar(){
        $this->experiencia += 10;
        $this->aumentarNivel();
    }

    function aumentarNivel(){
        if ($this->experiencia >= 50) {
            $this->nivel++;
            $this->experiencia = 0;
            $this->aumentarHp;
            $this->evoluir();
        }
    }

    function aumentarHp() {
        $this->Hp +=10;
    }

    function evoluir(){
        if ($this->nivel == 16) {
            if ($this->nome == 'Charmander') {
                $this->nome = "Charmileon";
            }

            elseif ($this->nome == "Psyduck") {
               $this->nome = "Golduck";
            }
        }
    }
}

$pokemon1 = new Pokemon("Charmander");
$pokemon1->tipo = "Fogo";
$pokemon1->batalhar();

$pokemon2 = new Pokemon("Psyduck");
$pokemon2->tipo = "Água";
