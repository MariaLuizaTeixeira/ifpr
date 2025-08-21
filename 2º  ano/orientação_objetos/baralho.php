<?php

$cartas = array();
$dicas = array();
$pontuacao = 0;
$novamente = 0;

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

    public function getDica()
    {
        return $this->dica;
    }

    public function setDica($dica): self
    {
        $this->dica = $dica;

        return $this;
    }
}

$carta = new Carta();
$carta->setNome("Mago");
$carta->setNumero(1);
$carta->setDica("Habilidade, intenção, criação, destreza.");
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Sacerdotisa");
$carta->setNumero(2);
$carta->setDica("Intuição, voz interior, mistério.");
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Imperatriz");
$carta->setNumero(3);
$carta->setDica("Criatividade, fertilidade, abundância.");
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Imperador");
$carta->setNumero(4);
$carta->setDica("Autoridade, disciplina, paternidade.");
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Papa");
$carta->setNumero(5);
$carta->setDica("Tradição, hierarquia, moralidade.");
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Enamorados");
$carta->setNumero(6);
$carta->setDica("União, paixão, dualidade.");
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Carro de guerra");
$carta->setNumero(7);
$carta->setDica("Direção, controle.");
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Justiça");
$carta->setNumero(8);
$carta->setDica("Clareza, verdade.");
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Eremita");
$carta->setNumero(9);
$carta->setDica("Busca autoconhecimento, orientação interior, procurar a verdade.");
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Roda da fortuna");
$carta->setNumero(10);
$carta->setDica("Ciclos, mudança, tudo o que vai, volta.");
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Força");
$carta->setNumero(11);
$carta->setDica("Coragem, instinto, confiança.");
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Enforcado");
$carta->setNumero(12);
$carta->setDica("Martírio, sacrifício, libertação.");
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Morte");
$carta->setNumero(13);
$carta->setDica("Fim de ciclos, começos, transformação.");
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Temperança");
$carta->setNumero(14);
$carta->setDica("Paciência, caminho de equilíbrio.");
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Diabo");
$carta->setNumero(15);
$carta->setDica("Excesso, egoísmo, medos, obsessões, manipulação.");
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Torre fulminada");
$carta->setNumero(16);
$carta->setDica("Rompendo amarras, desastre, sofrimento.");
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Estrela");
$carta->setNumero(17);
$carta->setDica("Esperança, fé.");
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Lua");
$carta->setNumero(18);
$carta->setDica("Ilusões, segredos, inconscientes.");
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Sol");
$carta->setNumero(19);
$carta->setDica("Otimismo, felicidade, sucesso.");
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Julgamento");
$carta->setNumero(20);
$carta->setDica("Acerto de contas.");
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Mundo");
$carta->setNumero(21);
$carta->setDica("Realização, harmonia, conclusão.");
array_push($cartas, $carta);

$carta = new Carta();
$carta->setNome("Louco");
$carta->setNumero(22);
$carta->setDica("Inocência, espírito livre, novos começos.");
array_push($cartas, $carta);

print("---------- BEM VINDO (A) AO ADIVINHE A CARTA ----------\n");
do {
    print("\n----------- MENU -----------\n");
    print("1 - JOGAR\n");
    print("2 - CATÁLOGO DE CARTAS\n");
    print("3 - INSTRUÇÕES\n");
    print("4 - PONTUAÇÃO\n");
    print("0 - SAIR\n");
    $opcao = readline("Escolha a opção: ");
    switch ($opcao) {
        case 0:
            print("Programa encerrado!");
        break;

        case 1:
            $sorteado = $cartas[array_rand($cartas)];
            $acerto = 0;
            do {
               $tentativa = ucfirst(strtolower(
    readline("Insira o nome da carta de sua tentativa: "))
);

                if ($tentativa == $sorteado->getNome()) {
                    print("Você acertou!\n");
                    $acerto = 1;
                    $pontuacao++;
                    $novamente = 3;
                } 
                else {
                    print("Não é essa carta :(\n");
                    $novamente = 
                    readline("1 - Tentar novamente\n2 - Receber dica\n3 - Desistir\n");
                    switch ($novamente) {
                        case 1:

                        break;

                        case 2:
                            print("A dica é: " . $sorteado->getDica() . "\n");
                        break;
                        
                        case 3:
                            print("Que pena :(\nA carta correta era: " . $sorteado->getNome());
                            break;
                    }
                }
            } while ($novamente != 3 and $acerto == 0);
        break;

        case 2:
            print('CATÁLOGO DE CARTAS: ');
            print("1 - Mago");
            print("2 - Sacerdotisa");
            print("3 - Imperatriz");
            print("4 - Imperador");
            print("5 - Papa");
            print("6 - Enamorados");
            print("7 - Carro de Guerra");
            print("8 - Justiça");
            print("9 - Eremita");
            print("10 - Roda da Fortuna");
            print("11 - Força");
            print("12 - Enforcado");
            print("13 - Morte");
            print("14 - Temperança");
            print("15 - Diabo");
            print("16 - Torre");
            print("17 - Estrela");
            print("18 - Lua");
            print("19 - Sol");
            print("20 - Julgamento");
            print("21 - Mundo");
            print("22 - Louco");
        break;

        case 3:
            print("INSTRUÇÕES\n");
            print("Para jogar vá ao menu e digite \"1\" para jogar. Insira o nome da carta a ser chutada. É possível chutar até acertar, mas se desejado peça uma dica (palavras-chave sobre o significado da carta).\n Para ver as cartas que podem ser sorteadas, vá ao menu e digite \"2\".\n Para ver seu saldo de pontos, vá ao menu e digite \"4\".\n Para sair, vá ao menu e digite \"0\".\n");
        break;

        case 4:
            print("Sua pontuação é " . $pontuacao . " pontos.\n");
        break;
        
        default:
            ("Opção inválida, tente novamente.\n");
        break;
    }
} while ($opcao != 0)

?>

