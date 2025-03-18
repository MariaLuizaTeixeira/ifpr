<?php

$total = 0;
$multiplicado = readline("Insira o número que será multiplicado:");
$multiplicador = readline("Insira o número que estará multiplicando:");

for ($i=0; $i < $multiplicador; $i++) 
{ 
    $total+= $multiplicado;
}

print("{$multiplicado} vezes {$multiplicador} é {$total}.\n");

?>