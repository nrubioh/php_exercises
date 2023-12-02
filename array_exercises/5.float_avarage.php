<?php
$newArray = array();
$i = 0;
while ($i < 8) {
    $newFloat = readline("write down the float: ");
    array_push($newArray, $newFloat);
    $i++;
}
print "The firstValue is: ".$newArray[0]."\n";
print "The lastValue is: ".$newArray[count($newArray)-1]."\n";
$k = 0;
$sum = 0;
while ($k < count($newArray)) {
    print $newArray[$k];
    $sum += $newArray[$k];
    $k++;
}
print "\n the array avarage is: ".($sum/count($newArray));