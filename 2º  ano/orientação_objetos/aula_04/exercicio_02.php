<?php

$palavras = array("amor", "baixinho", "coração", "dedinho", "escola");
$vazio = array();

for ($i=0; $i < 5; $i++) 
{ 
    $vazio[$i] = $palavras[$i];
    
    if ($i == 4) 
    {
        print($vazio[$i] . ". ");
    }
    else 
    {
        print($vazio[$i] . ", ");
    }
    
}

?>
