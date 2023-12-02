<?php
$newArray =  array();
/* for ($i=1; $i <= 5; $i++) { 
    $newElement = readline("new number: ");
    if ($newElement >= 1 && $newElement < 10) {
        array_push($newArray, $newElement);
    } else {
        print "the number has not been added \n";
    }
}
foreach ($newArray as $parcial) {
    print $parcial. "\n";
} */

while (count($newArray) <= 5) {
    $newElement = (int)readline("new number: ");
    if ($newElement >= 1 && $newElement < 10) {
        array_push($newArray, $newElement);
    } else {
        print "the number has not been added \n";
    }
}
sort($newArray);
foreach ($newArray as $parcial) {
    print $parcial. "\n";
}