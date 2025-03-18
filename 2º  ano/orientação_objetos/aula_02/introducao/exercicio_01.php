<?php

$numero = readline("Insira um número");


for ($i=0; $i <= 10; $i++) 
{ 
    if ($numero == 0) 
    {
        print("Esse número é neutro\n");
    }

    else if ($numero > 0)
    {
        print("O número {$numero} é positivo\n");
    }

    else 
    {
        print("O número {$numero} é negativo\n");
    }
}

?>
