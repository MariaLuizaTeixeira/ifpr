<?php

class Aluno {
    private $nota1;
    private $nota2;

    public function getNota1()
    {
        return $this->nota1;
    }

    public function setNota1($nota1)
    {
        $this->nota1 = $nota1;

        return $this;
    }

    public function getNota2()
    {
        return $this->nota2;
    }

    public function setNota2($nota2)
    {
        $this->nota2 = $nota2;

        return $this;
    }

    public function Media() {
        $media = ($this->getNota1() + $this->getnota2()) / 2;
        return $media;
    }
}

$aluno1 = new Aluno();
$aluno1->setnota1(readline("Insira a nota 1:\n"));
$aluno1->setnota2(readline("Insira a nota 2:\n"));
print("A média do aluno é " . $aluno1->Media() . ".\n");

$aluno2 = new Aluno();
$aluno2->setnota1(readline("Insira a nota 1:\n"));
$aluno2->setnota2(readline("Insira a nota 2:\n"));
print("A média do aluno é " . $aluno2->Media()) . ".\n";

$aluno3 = new Aluno();
$aluno3->setnota1(readline("Insira a nota 1:\n"));
$aluno3->setnota2(readline("Insira a nota 2:\n"));
print("A média do aluno é " . $aluno3->Media() . ".\n");
