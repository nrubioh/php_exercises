<?php
$newArray = array();
$i = 0;
while ($i < 3) {
    do {
        $inputNumber = readline("to add the new number: ");
    } while (!is_numeric($inputNumber) || !is_int((int)$inputNumber));
    array_push($newArray, $inputNumber);
    $i++;
    echo "number added! \n";
}
$j = 0;
while ($j < count($newArray)) {
    print "The value ".($j+1)." is: ".($newArray[$j])."\n";
    $j++;
}