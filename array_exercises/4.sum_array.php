<?php
$newArray = array();
$i = 0;
while ($i<10){
    $newNumber = readline("write the new number: ");
    array_push($newArray, $newNumber);
    $i++;
}
$j = 0;
$sum = 0; 
while ($j < count($newArray)) {
    $sum += $newArray[$j];
    $j++;
}
print "the array sum is: ".$sum;