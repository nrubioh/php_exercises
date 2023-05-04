<?php

function sumAges($ages=array(23,65,3)){ //default parameters!
    return array_sum($ages);
}
    echo sumAges()."\n"; //with default parameters
    echo sumAges(array(1,1,1))."\n"; //normal assignation


//you can finish with coma / dynamic code
function mult($n1 = 2, $n2 = 3, $n3 = 4,){ 
    return $n1*$n2*$n3;
}
    echo mult()."\n";


/** Here there are two classes, the function "receive_class" now has TWO parameters.
*If you don't assign anything the var "$class (line 25)" will be iqual to new emptyRandomClass,
*but also you can put other class such as otherEmptyRandomClass 
*(that would be a normal assignation)
*/
class emptyRandomClass{
}
class otherEmptyRandomClass{
}
function receive_class($class = new emptyRandomClass){  //default parameters!
    echo $class::class."\n"; //superGlobal to see just the CLASS NAME
}
    receive_class(); //with default parameters
    receive_class(new otherEmptyRandomClass); //normal assignation


//1st has to be the OBLIGATORIES parameters and after default parameters
function sum($n1,$n2=1){
    return $n1 + $n2;
}
    echo sum(3)."\n"; 
//the number 3 just can replace var $n1 is you want remplace $n2 you must to put (3,X)

