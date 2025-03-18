<?php

/*for ($i=0; $i <= 5; $i++) 
{ 
    $nome = readline("Insira o seu nome:\n");
    $altura = readline("Insira a sua altura:\n");
    $peso = readline("Insira o seu peso:\n");

    $imc = $peso / ($altura * $altura);

    print("{$nome} pesa {$peso}, mede {$altura} e o IMC corresponde a {$imc}");
}
*/

dados();

function dados()
{
    for ($i=0; $i <= 5; $i++) 
    { 
        $nome = readline("Insira o seu nome:\n");
        $altura = readline("Insira a sua altura:\n");
        $peso = readline("Insira o seu peso:\n");

        calculo($peso, $altura);

        print("{$nome} pesa {$peso}, mede {$altura} e o IMC corresponde a " . calculo($peso, $altura));
    }
}

function calculo($peso, $altura): string
{
    $imc = $peso / ($altura * $altura);
    return $imc;
}
?>
