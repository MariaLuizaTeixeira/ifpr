<?php

$cartas = array();
    

class Carta
{
    private int $numero;
    private string $nome;
    private array $dica = array("Mago" => "dica mago",
    "Sacerdotisa" => "dica sacerdotisa",
    "Imperatriz" => "dica imperatriz",
    "Imperador" => "dica imperador",
    "Papa" => "dica papa",
    "Enamordos" => "dica enamorados",
    "Carro de Guerra" => "dica carro",
    "Justiça" => "dica justiça",
    "Eremita" => "dica eremita", 
    "Roda da Fortuna" => "dica roda",
    "Força" => "dica força",
    "Enforcado" => "dica enforcado",
    "Morte" => "dica morte",
    "Temperança" => "dica temperança", 
    "Diabo" => "diabo",
    "Torre Fulminada" => "dica torre",
    "Estrela" => "dica estrela",
    "Lua" => "dica lua",
    "Sol" => "dica sol",
    "Julgamento" => "dica julgamento",
    "Mundo" => "dica mundo",
    "Louco" => "dica louco");

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

$pontuacao = 0;

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

do {
    print("\nBEM VINDO(A) AO ADIVINHE A CARTA\n");
    print("\n----------- MENU -----------\n");
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
            $sorteado = $cartas[array_rand($cartas)];
            $acerto = 0;
            do {
                $tentativa = ucfirst(readline("Insira o nome da carta de sua tentativa: "));
                print($sorteado->getNome());
                $dica[$sorteado->getNome()];
                if ($tentativa == $sorteado->getNome()) {
                    print("Você acertou!\n");
                    $acerto = 1;
                    $pontuacao++;
                } else {
                    print("Não é essa carta :(\n");
                    $novamente = readline("1 - Tentar novamente.\n 2 - Receber dica\n");
                    switch ($novamente) {
                        case 2:
                            print("Sua dica é " . $dica["$sorteado->getNome()"]);
                            break;
                        
                        default:
                            print("Insira uma opção válida!\n");
                            break;
                    }
                }
            } while ($acerto != 0);

            break;

        case 2:
            print("\nCATÁLOGO DE CARTAS\n");
            print("1 - Mago\n");
            print("2 - Sacerdotisa\n");
            print("3 - Imperatriz\n");
            print("4 - Imperador\n");
            print("5 - Papa\n");
            print("6 - Enamorados\n");
            print("7 - Carro de Guerra\n");
            print("8 - Justiça\n");
            print("9 - Eremita\n");
            print("10 - Roda da Fortuna\n");
            print("11 - Força\n");
            print("12 - Enforcado\n");
            print("13 - Morte\n");
            print("14 - Temperança\n");
            print("15 - Diabo\n");
            print("16 - Torre Fulminada\n");
            print("17 - Estrela\n");
            print("18 - Lua\n");
            print("19 - Sol\n");
            print("20 - Julgamento\n");
            print("21 - Mundo\n");
            print("22 - Louco\n");
            break;

        case 3:
            print("INSTRUÇÕES\n");
            print("Para jogar vá ao menu e digite \"1\" para jogar. Insira o nome da carta a ser chutada. É possível chutar até acertar, mas se desejado peça uma dica (palavras-chave sobre o significado da carta).\n Para ver as cartas que podem ser sorteadas, vá ao menu e digite \"2\".\n Para ver seu saldo de pontos, vá ao menu e digite \"4\".\n Para sair, vá ao menu e digite \"0\".\n");
            break;

        case 4:
            print("Sua pontuação é " . $pontuacao . " pontos.\n");
            break;

        default:
            ("Opção inválida, tente novamente.");
            break;
    }
} while ($opcao != 0);
