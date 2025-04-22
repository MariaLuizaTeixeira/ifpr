<?php

$ret = array();

for ($i=0; $i < 5; $i++) 
{ 
    $retangulo["base"] = readline("Insira a base: ");
    $retangulo["altura"] = readline("Insira a altura: ");
    
    array_push($ret, $retangulo);
}

function area(array $ret) 
{
    $area = array();
    for ($i=0; $i < 5; $i++) 
    { 
        return $ret[$i]["base"] * $ret[$i]["altura"];
        $area[$i] = area($ret);
    }
    return $area;
}

function imprime ( array $area)
{
    for ($i=0; $i < 5; $i++) 
    { 
        print("A área do retângulo ". $i + 1 . " é: " . $area[$i] . ".\n");
    }
}

$area = area($ret);
imprime ($area);

/* for ($i=0; $i < 5; $i++) 
{ 
    print("A área do retângulo " . $i + 1 . " é: " . $ret[$i]["base"] * $ret[$i]["altura"] . ".\n");
}
*/

?>
