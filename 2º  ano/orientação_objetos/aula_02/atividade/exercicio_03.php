<?php

$antigo = readline("Insira um número: ");

for ($i=0; $i < 2; $i++) 
{ 
    $atual = readline("Insira um número: ");

    if ($antigo > $atual) 
    {
        $menor = $atual;
    }

    else 
    {
        $menor = $antigo;
    }
}

print("O menor número é {$menor}.\n");
?>