<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$b = "Die roten Reiter";
$a = "Jippieeehjey";
$positionen = array();
$i=0;
$position = strpos($a, "e");
while ($position != false){
    $positionen[$i] = $position;
    $position = strpos($a, "e", $position + 1);
    $i++;
}
print_r($positionen);
echo "<br />";


echo substr_replace($b, "blauen", 4, 5);
echo str_replace("e", "i", $a)
?>