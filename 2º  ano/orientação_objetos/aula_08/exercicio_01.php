<?php

class Pessoa
{
    private $nome;
    private $endereco;
    private $cidade;
    private $UF;
    private $altura;

    public function __construct($n, $e, $c, $u, $a) {
        $this->nome = $n;
        $this->endereco = $e;
        $this->cidade = $c;
        $this->UF = $u;
        $this->altura = $a;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getUF()
    {
        return $this->UF;
    }

    public function setUF($UF)
    {
        $this->UF = $UF;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    public function getApresentacao() {
        $apresentar = "Olá, mundo. Sou " . $this->getNome() . ", resido no endereço " . $this->getEndereco() . ", " . $this->getCidade() . " " . $this->getUF() . " e possuo uma altura de " . $this->getAltura() . "!\n";
        return $apresentar;
    }
}

$Pessoa01 = new Pessoa("Malu", "Jardim Itaipu", "Foz", "PR", 1.55);
print($Pessoa01->getApresentacao());
