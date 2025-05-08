<?php

$lista = array();
$media = 0;

for ($i=0; $i < 10; $i++) 
{ 
    $lista[$i] = readline("Insira um número: ");
    $media+=$lista[$i];
}

$media = $media / 10;
print("A média é: {$media}. \n");

?>
