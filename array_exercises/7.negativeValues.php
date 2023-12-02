<?php

$newArray = array();
$i = 0;
while ($i < 10) {
    $newNumber =  (int)readline("write the number: ");
        if ($newNumber >= 0) {
            print "The Number is positive \n";
            array_push ($newArray,['positive'=>$newNumber]);
        } else {
            print "The Number is negative \n";
            array_push ($newArray,['negative'=>$newNumber]);
        }
    $i++;
}

$positiveCount = null;
$negativeCount = null;
foreach ($newArray as $item) {
    if (isset($item['positive'])){
        $positiveCount++;
    }else{
        $negativeCount++;
    }
}
echo '<pre>';
print_r($newArray);
echo '</pre>';
echo "\n The number of positives values are: $positiveCount \n";
echo "The number of negatives values are: $negativeCount \n";


