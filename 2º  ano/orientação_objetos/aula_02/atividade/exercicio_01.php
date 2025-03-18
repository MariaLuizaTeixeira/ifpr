<?php

/* $numero = readline("Insira um número diferente de 0: ");

if ($numero > 0) 
{
    $dobro = $numero + $numero;
    print("Como o número {$numero} é positivo, o seu dobro é {$dobro}");
}

else 
{
    $triplo = $numero + $numero + $numero;
    print("Como o número {$numero} é positivo, o seu triplo é {$triplo}");
}
*/

pergunta();

function pergunta()
{
    $numero = readline("Insira um número diferente de 0: ");

    if ($numero > 0) 
    {
        dobro($numero);
        print(dobro($numero));
    }

    else 
    {
        triplo($numero);
        print(triplo($numero));
    }
}

function dobro($numero): string
{
    $dobro = $numero + $numero;
    //print("Como o número {$numero} é positivo, o seu dobro é {$dobro}");

    return $dobro;
}

function triplo($numero): string
{
    $triplo = $numero + $numero + $numero;
    //print("Como o número {$numero} é positivo, o seu triplo é {$triplo}");

    return $triplo;
}

?>