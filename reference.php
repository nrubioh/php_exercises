<?php
$cat = "meow";
function cat_barking(&$cat_dog){ //reference of $cat
    $cat_dog = "woof";
}
    cat_barking($cat);
    echo $cat."\n";


function sumAges($ages=array(23,65,3)){ //default parameters!
    return array_sum($ages);
}
    echo sumAges()."\n"; //with default parameters
    echo sumAges(array(1,1,1))."\n"; //normal assignation


function mult($n1 = 2, $n2 = 3, $n3 = 4,){
    return $n1*$n2*$n3;
}
    echo mult()."\n";


class emptyRandomClass{}
class otherEmptyRandomClass{}
function receive_class($class = new emptyRandomClass){  //default parameters!
    echo $class::class."\n";
}
    receive_class(); //with default parameters
    receive_class(new otherEmptyRandomClass); //normal assignation


function sum($n1,$n2=1){
    return $n1 + $n2;
}
echo sum(3)."\n"; 
//the number 3 just can replace var $n1 is you want remplace $n2 you must to put (3,X)

