<?php

$total = 0;

menu($$opcao, $total, $numeros, $max, $sorteados);

function menu(&$opcao, $total, $numeros, $max, $sorteados)
{
    print("---------- MENU ----------\n");
    print("Como jogar [1]\n");
    print("Megasena [2]\n");
    print("Quina [3]\n");
    print("Lotomania [4]\n");
    print("Lotofácil [5]\n");
    print("Carrinho [6]\n");
    print("Sair [7]\n");

    $opcao = readline("Insira a opção desejada:\n");

    switch ($opcao) 
    {
        case 1:
            comoJogar($opcao);
        break;
        
        case 2:
            megasena($sorteados, $max, $opcao, $numeros, $total);
        break;

        case 3:
            quina($sorteados, $max, $opcao, $numeros, $total);
        break;

        case 4:
            lotomania($sorteados, $max, $opcao, $numeros = 50, $total);
        break;

        case 5:
            lotofacil($sorteados, $max, $opcao, $numeros, $total);
        break;

        case 6:
            carrinho($total, $opcao, $numeros, $max, $sorteados);
        break;

        case 7:
            exit;
        break;
    }
}

function comoJogar(&$opcao): void
{
    print("Mega-Sena\n");
    print("Objetivo: Acertar 6 números sorteados entre 1 e 60.\nComo jogar: O apostador escolhe de 6 a 15 números. O prêmio principal é para quem acertar os 6 números (Sena), mas também há prêmios para 5 (Quina) e 4 números (Quadra).");
    print("Lista de preços:\n");
    print("6 números	R$ 4,50\n7 números	R$ 31,50\n8 números	R$ 126,00\n9 números	R$ 378,00\n10 números	R$ 945,00\n11 números	R$ 2.079,00\n12 números	R$ 4.158,00\n13 números	R$ 7.722,00\n14 números	R$ 13.515,00\n15 números	R$ 22.522,50\n\n");
    print("Quina\n");
    print("Objetivo: Acertar 5 números sorteados entre 1 e 80.\nComo jogar: O apostador escolhe de 5 a 15 números. O prêmio é dividido entre quem acertar 5, 4, 3 ou 2 números.");
    print("Lista de preços:\n");
    print("5 números	R$ 2,00\n6 números	R$ 12,00\n7 números	R$ 42,00\n8 números	R$ 112,00\n9 números	R$ 252,00\n10 números	R$ 504,00\n11 números	R$ 1.008,00\n12 números	R$ 2.016,00\n13 números	R$ 4.032,00v14 números	R$ 8.064,00v15 números	R$ 16.128,00\n\n");
    print("Lotofácil\n");
    print("Objetivo: Acertar 15 números sorteados entre 1 e 25.\nComo jogar: O apostador escolhe 15 números, mas também pode escolher de 16 a 18 números, o que aumenta as chances de ganhar. O prêmio é para quem acerta 15, 14, 13, 12 ou 11 números.");
    print("Lista de preços:\n");
    print("15 números	R$ 2,50\n16 números	R$ 40,00\n17 números	R$ 340,00\n18 números	R$ 2.040,00\n19 números	R$ 9.690,00\n20 números	R$ 38.760,00\n\n");
    print("Lotomania\n");
    print("Objetivo: Acertar 20 números sorteados entre 1 e 50.Como jogar: O apostador escolhe 50 números, e o sorteio é feito entre 50 números. A premiação é para quem acertar 20, 19, 18, 17, 16 ou 15 números.\n");
    print("Lista de preços:\n");
    print("50 números	R$ 2,50\n\n");

    $opcao = readline("Voltar ao menu [1]\n");

    if ($opcao == 1) 
    {
        menu($opcao, $total, $numeros, $max, $sorteados);
    }
 
}

function megasena(&$sorteados, &$max, &$opcao, &$numeros, &$total)
{
    
    $precos = [4.50, 31.50, 126, 378, 945, 2079, 4158, 7722, 13515, 22522.50];

    $sorteados = [];

    $numeros = readline("Insira quantos números esse jogo terá:\n");

    switch ($numeros) 
    {
        case 6:
            print("Um jogo com {$numeros} números custa $precos[0]");
            $total+= $precos[0];
        break;
        
        case 7:
            print("Um jogo com {$numeros} números custa $precos[1]");
            $total+= $precos[1];
        break;

        case 8:
            print("Um jogo com {$numeros} números custa $precos[2]");
            $total+= $precos[2];
        break;

        case 9:
            print("Um jogo com {$numeros} números custa $precos[3]");
            $total+= $precos[3];
        break;

        case 10:
            print("Um jogo com {$numeros} números custa $precos[4]");
            $total+= $precos[4];
        break;

        case 11:
            print("Um jogo com {$numeros} números custa $precos[5]");
            $total+= $precos[5];
        break;

        case 12:
            print("Um jogo com {$numeros} números custa $precos[6]");
            $total+= $precos[6];
        break;

        case 13:
            print("Um jogo com {$numeros} números custa $precos[7]");
            $total+= $precos[7];
        break;

        case 14:
            print("Um jogo com {$numeros} números custa $precos[8]");
            $total+= $precos[8];
        break;

        case 15:
            print("Um jogo com {$numeros} números custa $precos[9]");
            $total+= $precos[9];
        break;
    }

    while ($numeros < 6 || $numeros > 15) 
    {
        $numeros = readline("Insira quantos números esse jogo terá:\n");
    }

    $sorteados = [];

    for($i=0; $i < $numeros; $i++)
    {
        do 
        {
            $novo_numero = rand(0, 60);
        } while (in_array($novo_numero, $sorteados));

        $sorteados[] = $novo_numero;
    }
    foreach($sorteados as $sorteado)
    {
        print($sorteado . "\n"); 
    }
   
    $opcao = readline("Voltar ao menu[1]\n Realizar mais um jogo[2]\n");

    if ($opcao == 1) 
    {
        menu($opcao, $total, $numeros, $max, $sorteados);
    }
    
    if ($opcao == 2) 
    {
        megasena($sorteados, $max, $opcao, $numeros, $total);
    }
}

function quina($sorteados, $max, $opcao, $numeros, $total)
{
    $precos = [2, 12, 42, 112, 252, 504, 1.008, 2.016, 8.064, 16.128];

    $sorteados = [];

    $numeros = readline("Insira quantos números esse jogo terá:\n");

    switch ($numeros) 
    {
        case 6:
            print("Um jogo com {$numeros} números custa $precos[0]");
            $total+= $precos[0];
        break;
        
        case 7:
            print("Um jogo com {$numeros} números custa $precos[1]");
            $total+= $precos[1];
        break;

        case 8:
            print("Um jogo com {$numeros} números custa $precos[2]");
            $total+= $precos[2];
        break;

        case 9:
            print("Um jogo com {$numeros} números custa $precos[3]");
            $total+= $precos[3];
        break;

        case 10:
            print("Um jogo com {$numeros} números custa $precos[4]");
            $total+= $precos[4];
        break;

        case 11:
            print("Um jogo com {$numeros} números custa $precos[5]");
            $total+= $precos[5];
        break;

        case 12:
            print("Um jogo com {$numeros} números custa $precos[6]");
            $total+= $precos[6];
        break;

        case 13:
            print("Um jogo com {$numeros} números custa $precos[7]");
            $total+= $precos[7];
        break;

        case 14:
            print("Um jogo com {$numeros} números custa $precos[8]");
            $total+= $precos[8];
        break;

        case 15:
            print("Um jogo com {$numeros} números custa $precos[9]");
            $total+= $precos[9];
        break;
    }

    while ($numeros < 5 || $numeros > 15) 
    {
        $numeros = readline("Insira quantos números esse jogo terá:\n");
    }

    $sorteados = [];

    for($i=0; $i < $numeros; $i++)
    {
        do 
        {
            $novo_numero = rand(0, 60);
        } while (in_array($novo_numero, $sorteados));

        $sorteados[] = $novo_numero;
    }
    foreach($sorteados as $sorteado)
    {
        print($sorteado . "\n"); 
    }
   
    $opcao = readline("Voltar ao menu[1]\n Realizar mais um jogo[2]\n");

    if ($opcao == 1) 
    {
        menu($opcao, $total, $numeros, $max, $sorteados);
    }
    
    if ($opcao == 2) 
    {
        quina($sorteados, $max, $opcao, $numeros, $total);
    }
}

function lotomania($sorteados, $max, $opcao, $numeros = 50, $total)
{
    $precos = [2.50];

    $sorteados = [];

    print("Os jogos da lotomania custam R$$precos[0] reias.");

    $sorteados = [];

    for($i=0; $i < $numeros; $i++)
    {
        do 
        {
            $novo_numero = rand(0, 60);
        } while (in_array($novo_numero, $sorteados));

        $sorteados[] = $novo_numero;
    }
    foreach($sorteados as $sorteado)
    {
        print($sorteado . "\n"); 
    }
   
    $opcao = readline("Voltar ao menu[1]\n Realizar mais um jogo[2]\n");

    if ($opcao == 1) 
    {
        menu($opcao, $total, $numeros, $max, $sorteados);
    }
    
    if ($opcao == 2) 
    {
        lotomania($sorteados, $max, $opcao, $numeros = 50, $total);
    }
}


function lotofacil($sorteados, $max, $opcao, $numeros, $total)
{
    $precos = [2.50, 40.00, 340, 2.040, 9.690, 38.760];

    $sorteados = [];

    $numeros = readline("Insira quantos números esse jogo terá:\n");

    switch ($numeros) 
    {
        case 6:
            print("Um jogo com {$numeros} números custa $precos[0]");
            $total+= $precos[0];
        break;
        
        case 7:
            print("Um jogo com {$numeros} números custa $precos[1]");
            $total+= $precos[1];
        break;

        case 8:
            print("Um jogo com {$numeros} números custa $precos[2]");
            $total+= $precos[2];
        break;

        case 9:
            print("Um jogo com {$numeros} números custa $precos[3]");
            $total+= $precos[3];
        break;

        case 10:
            print("Um jogo com {$numeros} números custa $precos[4]");
            $total+= $precos[4];
        break;

        case 11:
            print("Um jogo com {$numeros} números custa $precos[5]");
            $total+= $precos[5];
        break;
    }

    while ($numeros < 5 || $numeros > 25) 
    {
        $numeros = readline("Insira quantos números esse jogo terá:\n");
    }

    $sorteados = [];

    for($i=0; $i < $numeros; $i++)
    {
        do 
        {
            $novo_numero = rand(0, 60);
        } while (in_array($novo_numero, $sorteados));

        $sorteados[] = $novo_numero;
    }
    foreach($sorteados as $sorteado)
    {
        print($sorteado . "\n"); 
    }
   
    $opcao = readline("Voltar ao menu[1]\n Realizar mais um jogo[2]\n");

    if ($opcao == 1) 
    {
        menu($opcao, $total, $numeros, $max, $sorteados);
    }
    
    if ($opcao == 2) 
    {
        lotofacil($sorteados, $max, $opcao, $numeros, $total);
    }
}

function carrinho($total, &$opcao, $numeros, $max, $sorteados)
{
    print("O seu total é de {$total} reais.");
    $opcao = readline("Voltar ao menu[1]");
    
    if ($opcao == 1) 
    {
        menu($opcao, $total, $numeros, $max, $sorteados);
    }

}
