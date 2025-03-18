<?php

$n1 = readline("Insira um número:");
$n2 = readline("Insira outro número:");

if ($n1 > $n2) 
{
    $maior = $n1;
    $menor = $n2;
}

else 
{
    $maior = $n2;
    $menor = $n1;
}

print("Os números divisíveis por 5 entre {$menor} e {$maior} são:\n");

for ($i=$menor; $i < $maior; $i++) 
{ 
    if ($i % 5 == 0) 
    {
        print($i . "\n");
    }
}

?>