<?php

class Retangulo {
    public $base;
    public $altura;

    function area() {
        $area = $this->base * $this->altura;
        return $area;
    }

    function perimetro() {
        $perimetro = $this->base * 2 + $this->altura * 2;
        return $perimetro;
    }
}

$Retangulo01 = new Retangulo;
$Retangulo01->base = readline("Insira a base: ");
$Retangulo01->altura = readline("Insira a altura: ");
$Retangulo01->area();
$Retangulo01->perimetro();
$area1 = $Retangulo01->area();
$perimetro1 = $Retangulo01->perimetro();
print("A área é {$area1} e o perímetro é {$perimetro1},\n");

$Retangulo01 = new Retangulo;
$Retangulo01->base = readline("Insira a base:");
