<?php
$a = 20;
$b = 40;

function myfxn($t, $u) 
{
    $b = $t + $u;
    $d = $t * $u;

    echo "The sum of $t and $u is $b <br>";
    echo "The product of $t and $u is $d";
}

myfxn($a, $b);

?>