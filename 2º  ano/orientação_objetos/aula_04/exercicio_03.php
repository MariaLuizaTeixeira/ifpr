<?php

$a = array(1, 2, 3, 4, 5);
$b = array(0, 2, 4, 6, 8);
$c = array();
$d = array();

for ($i=0; $i < 5; $i++) 
{ 
    for ($j=0; $j < 5; $j++) 
    { 
        if ($a[$i] == $b[$j]) 
            {
                array_push($c, $a[$i]);
            }
    }
}

for ($i=0; $i < 5; $i++) 
{ 
    array_push($d, $a[$i]);
}

for ($i=0; $i < 5; $i++) 
{ 
    array_push($d, $b[$i]);
}

print_r($c);
print_r($d);


?>
