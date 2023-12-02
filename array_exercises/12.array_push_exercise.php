<?php 

$newArray = array();
$elementNumbers =  readline("how many elements do you want 4 the array?");

$i = 0 ;
while ($i < $elementNumbers) { 
    $writeName = readline("write down the name:");
    array_push($newArray, $writeName);
    $i ++;
}

var_dump($newArray); //--or--
$j=0;
while ($j < $elementNumbers) {   //also you can write count($newArray)
    print ($newArray[$j])."\n";
    $j++;
}