<?php

$vetor0 = array();
$vetor1 = array();
$vetor2 = array();
$vetor3 = array();

for ($i=0; $i < 5; $i++) 
{ 
    $vetor0[$i] = readline("Insira um número: ");
}

print_r($vetor0);

for ($i=0; $i < 5; $i++) 
{ 
    $vetor1[$i] = $vetor0[$i] * 1.8 + 32;
}

print_r($vetor1);

for ($i=0; $i < 5; $i++) 
{ 
    $contador = $vetor0[$i];

    if ($vetor0[$i] >= 1) 
    {
        $vetor2[$i] = $vetor0[$i];

        while ($contador > 1) 
        {
            $vetor2[$i] = $vetor2[$i] * ($contador - 1);
            $contador--;
        }
    }

    else 
    {
        $vetor2[$i] = 0;
    }
}

print_r($vetor2);

for ($i=0; $i < 5; $i++) 
{ 
    $vetor3[$i] = ($vetor0[$i] * $vetor0[$i] + $vetor0[$i] * 2 + 4) / ($vetor0[$i] * 2); 
}

print_r($vetor3);

print("Os resultados são:\n");

for ($i=0; $i < 5; $i++) 
{ 
    print($vetor1[$i] . ", ");
}

for ($i=0; $i < 5; $i++) 
{ 
    print($vetor2[$i] . ", ");
}

for ($i=0; $i < 5; $i++) 
{ 
    print($vetor3[$i] . ", ");
}

?>
