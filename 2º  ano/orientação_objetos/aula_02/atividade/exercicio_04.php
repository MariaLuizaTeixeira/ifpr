<?php

$impares = 0;
$pares = 0;
for ($i=0; $i < 10; $i++) 
{ 
    $numero = readline("Insira um número: ");

    if ($numero % 2 == 0) 
    {
        $pares++;
    }

    else 
    {
        $impares++;
    }

}

print("Há {$pares} números pares e {$impares} números ímpares.\n");

?>