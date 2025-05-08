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
print("A área é do retângulo 1 é {$area1} e o perímetro é {$perimetro1},\n");

$Retangulo02 = new Retangulo;
$Retangulo02->base = readline("Insira a base: ");
$Retangulo02->altura = readline("Insira a altura: ");
$Retangulo02->area();
$Retangulo02->perimetro();
$area2 = $Retangulo02->area();
$perimetro2 = $Retangulo02->perimetro();
print("A área do retângulo 2 é {$area2} e o perímetro é {$perimetro2},\n");

$Retangulo03 = new Retangulo;
$Retangulo03->base = readline("Insira a base: ");
$Retangulo03->altura = readline("Insira a altura: ");
$Retangulo03->area();
$Retangulo03->perimetro();
$area3 = $Retangulo03->area();
$perimetro3 = $Retangulo03->perimetro();
print("A área do retângulo 2 é {$area3} e o perímetro é {$perimetro3},\n");
