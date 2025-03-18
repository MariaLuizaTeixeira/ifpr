<?php

$total = 0;

do 
{
    $valor = readline("Insira o valor a ser contribuido para a confraternização: ");
    $total += $valor;

} while ($valor != 0);

print("O tal arrecadado é de {$total} reais.\n");

?>