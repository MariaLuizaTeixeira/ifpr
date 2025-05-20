<?php

class Aluno {
    private $nome;
    private $matricula;
    private $curso;

   /* public function __construct($n, $m, $c){
        $this->nome = $n;
        $this->matricula = $m;
        $this->curso = $c;
    }
*/
    public function estudar() {
        print("Aluno estudando");
    }

    public function irBanheiro() {
        print("Aluno indo ao banheiro.");
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome):
    {
        $this->nome = $nome;

        return $this;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula):
    {
        $this->matricula = $matricula;

        return $this;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso($curso):
    {
        $this->curso = $curso;

        return $this;
    }
}

$aluno = new Aluno("Malu", 121212, "TDS");

$aluno->setNome("Malu");
print("O nome da aluna é " . $aluno->getNome() . "\n");
print("A matrícula da aluna é " . $aluno->getMatricula() . "\n");
print("O curso da aluna é " . $aluno->getCurso() . "\n");
