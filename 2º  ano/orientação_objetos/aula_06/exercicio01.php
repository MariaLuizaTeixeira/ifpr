<?php

class Pessoa
{
    public $nome;
    public $endereco;
    public $cidade;
    public $UF;
    public $altura;

    function falarOla()
    {
        print("Olá, mundo. Sou " . $this->nome . ".\n");
    }

    function falarEndereco()
    {
        print("Moro em " . $this->endereco . ", " . $this->cidade . ", " . $this->UF . ".\n");
    }

    function falarAltura()
    {
        print("Tenho " . $this->altura . " em metros.\n");
    }
}

$Pessoa01 = new Pessoa();
$Pessoa01->nome = readline("Insira o seu nome: ");
$Pessoa01->endereco = readline("Insira o seu endereco: ");
$Pessoa01->cidade = readline("Insira a sua cidade: ");
$Pessoa01->UF = readline("Insira a su UF: ");
$Pessoa01->altura = readline("Insira a sua altura: ");

$Pessoa01->falarOla();
$Pessoa01->falarEndereco();
$Pessoa01->falarAltura();
