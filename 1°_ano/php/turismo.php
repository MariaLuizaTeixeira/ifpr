<?php
   
   system('clear');

   Menu($participacao = 2);

function Menu($participacao = 2)
{
    print("********** MENU **********\n");
    print("Seja bem vinda(o) às atrações turísticas de Foz do Iguaçu! Deseja conhecer a cidade?\n");
    $participacao = readline("\n[1] Sim \n [2] Não");

    if ($participacao == 1)
    {
        passeios($adultos = 0, $total = 0);
    }

    else
     {
        print("Que pena! Esperamos te ver em breve :(");
    }
}

function passeios($total)
{

    system('clear');

    print("********** PASSEIOS **********");
    print("\nCataratas - R$50,00 [1]");
    print("\nItaipu - R$40,00 [2]");
    print("\nParque das Aves - R$30,00 [3]");
    print("\nMarco das Três Fronteiras - R$20,00 [4]\n\n");

    $adultos = readline("\nPessoas com até 12 anos não pagam. Dito isso, quantas pessoas com mais de 12 anos participarão?");

    

   adicionar_passeio($participacao = 2 ,$total);
}

function adicionar_passeio($participacao, $total)
{

    $participacao = readline("\nDeseja adicionar um passeio?\n[1] Sim \n [2] Não");


   if ($participacao == 1) 
   {
    compra($total, $lugares, $adultos);
   }

   if ($participacao == 2) 
   {
    print("Sua compra deu um valor de {$total} reais. Boa viagem!");

    exit();
   }
}

function compra($total, $lugares, $adultos)
{
    system('clear');

    $passeios = [50, //cataratas
    40,  // itaipu
    30, // parque
    20]; // marco
    
    
    $lugares = readline("Insira a primeira palavra do lugar que deseja visitar:");
    $lugares = strtolower($lugares);
    switch ($lugares) {
        case 'cataratas':
            
            $total = $total + $passeios[0] * $adultos;
            break;
        
        case 'itaipu':
            
            $total = $total + $passeios[1] * $adultos;
            break;

        case 'parque':
            
            $total = $total + $passeios[2] * $adultos;
            break;
        case 'marco':
            
            $total = $total + $passeios[3] * $adultos;
            break;
    }

    adicionar_passeio($participacao = 2 ,$total);
}
