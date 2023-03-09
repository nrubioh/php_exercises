<?php
//$name = "Green";
//$lastname = "Oak";
function concatenate($name, $lastname){
echo $name.' '.$lastname;
}
concatenate("Green", "Oak"); //to call the fn with the var inside;

function sum($numbers){
    $plus = 0;
    for ($i=0; $i < 4 ; $i++) { 
        $plus = $plus + $numbers[$i];
    }
    echo "The sum value array is: " .$plus;
}
$numbers = array(1,2,3,4);
sum($numbers);
?>