<?php

$cartas = array();

class Carta
{
    private $numero;
    private $nome;
    private $dica;

    public function __toString() {

    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}

$carta = new Carta();
$carta->setNome("Mago");
$carta->setNumero(1);
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Sacerdotisa");
$carta->setNumero(2);
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Imperatriz");
$carta->setNumero(3);
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Imperador");
$carta->setNumero(4);
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Papa");
$carta->setNumero(5);
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Enamorados");
$carta->setNumero(6);
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Carro de guerra");
$carta->setNumero(7);
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Justiça");
$carta->setNumero(8);
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Eremita");
$carta->setNumero(9);
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Roda da fortuna");
$carta->setNumero(10);
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Carro de guerra");
$carta->setNumero(11);
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Enforcado");
$carta->setNumero(12);
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Morte");
$carta->setNumero(13);
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Temperança");
$carta->setNumero(14);
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Diabo");
$carta->setNumero(15);
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Torre fulminada");
$carta->setNumero(16);
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Estrela");
$carta->setNumero(17);
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Lua");
$carta->setNumero(18);
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Sol");
$carta->setNumero(19);
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Julgamento");
$carta->setNumero(20);
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Mundo");
$carta->setNumero(21);
array_push($cartas, $carta);


$carta = new Carta();
$carta->setNome("Louco");
$carta->setNumero(22);
array_push($cartas, $carta);

print_r($cartas);

print("---------- BEM VINDO(A) AO ADIVINHE A CARTA ----------\n");
 print("\n-----------MENU-----------\n");
    print("1 - JOGAR\n");
    print("2 - CATÁLOGO DE CARTAS\n");
    print("3 - INSTRUÇÕES\n");
    print("4 - PONTUAÇÃO\n");
    print("0- SAIR\n");

    $opcao = readline("Informe a opção: ");

    switch ($opcao) {
        case 0:
            print("Programa encerrado!");
        break;

        case 1:
            $sorteado = array_rand($cartas);
            $tentativa = strtolower(readline("Insira o nome da carta de sua tentativa: "));
            print($tentativa);
        break;
        
        case 2: 
            
        break;

        case 3:
            # code...
        break;

        case 4:
            # code...
        break;

        default:
            ("Opção inválida, tente novamente.");
        break;
    }

        

?>
