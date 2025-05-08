<?php

$lista = array();
$menor;
$maior;

for ($i=0; $i < 10; $i++)
{ 
    $lista[$i] = readline("Insira um número: ");
}

$menor = $i;
$maior = $i;

for ($i=0; $i < 10; $i++) 
{ 
    if ($menor > $lista[$i]) 
    {
        $menor = $lista[$i];
    }

    if ($maior < $lista[$i]) 
    {
        $maior = $lista[$i];
    }

}

print("O menor número é {$menor} e o maior número é {$maior}.");

?>
