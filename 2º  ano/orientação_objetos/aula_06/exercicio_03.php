<?php

class Retangulo {
    public $base = 3;
    public $altura = 4;

    function area() {
        $area = $this->base * $this->altura;
        return $area;
    }

    function perimetro() {
        $perimetro = $this->base * 2 + $this->altura * 2;
        return $perimetro;
    }
}

$Retangulo01 = new Retangulo();
$Retangulo01->area();
$Retangulo01->perimetro();
$area1 = $Retangulo01->area();
$perimetro1 = $Retangulo01->perimetro();
print("A área é {$area1} e o perímetro é {$perimetro1}.\n");
