<?php
//$name = "Green";
//$lastname = "Oak";
function concatenate($name, $lastname){
echo $name.' '.$lastname."\n";
}
concatenate("Green", "Oak"); //to call the fn with the var inside;

function sum($numbers){
    $plus = 0;
    for ($i=0; $i < 4 ; $i++) { 
        $plus = $plus + $numbers[$i];
    }
    echo "The sum value array is: " .$plus."\n";
}
$numbers = array(1,2,3,4);
sum($numbers);
// to know is the fn is or not , BUT IT HAS TO BE DEFINED
    var_dump(is_array($numbers));
//to get max and min value of arrays
    echo max(9,6,8,4,3)."\n";
    echo min(9,6,8,4,pi())."\n"; //pi()=M_PI
//to get random number among x-y
    echo rand(4,8)."\n";
// squareRoot
    echo sqrt(4)."\n";
?>