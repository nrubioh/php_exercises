<?php
function tolonial(){
    echo "meow meow meow";
}
function eevania(){
    echo "woof woof";
}
function titin(){
    echo "......eating.";
}
    $chooseFN = readline("to write the fn that you wanna use: ");
    $chooseFN();
    echo "\n";


function sum($n1,$n2){
    echo "the result is: ". $n1() + $n2();
}
function getNumber1(){
    return 5;
}
function getNumber2(){
    return readline("second number?: ");
}
function getNumber6(){
    return 6;
}
sum("getNumber2","getNumber6");


function bark() {
    return "woof!";
    }
    
$function = "bark";
    echo $function(); //answer: woof!