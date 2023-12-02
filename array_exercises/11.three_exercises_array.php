<?php

/* function exist_three_int($array, $value) {
    sort($array); //to array order
    $arrayNumber = count($array);

    for ($i = 0; $i < $arrayNumber - 2; $i++) {
        $left = $i + 1;
        $right = $arrayNumber - 1;

        while ($left < $right) {
            $sum = $array[$i] + $array[$left] + $array[$right];

            if ($sum === $value) {
                return true;
            } elseif ($sum < $value) {
                $left++;
            } else {
                $right--;
            }
        }
    }
    return false;
}

$elementsNumbers = readline("How many numbers do you want for the array size?: ");
$array = [];
for ($i = 0; $i < $elementsNumbers; $i++) {
    $elementsNumbers= readline("Add the number $i: ");
    $array[] = (int)$elementsNumbers;
}

$value = readline("What`s value do you want corroboratte? ");
    if (exist_three_int($array, $value)) {
        echo "Yes, there are three integers whose sum is equal to: $value";
    } else {
        echo "No, there are not three integers whose sum is equal to: $value.";
    }
 */
function solveMeFirst($a,$b){
        // Hint: Type return $a + $b; below  
    return $a+$b;
}
echo solveMeFirst(2,3);