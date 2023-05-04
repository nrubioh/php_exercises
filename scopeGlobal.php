<?php

$outside_var1 = "This is a global variable 1";
function my_function1(){
    global $outside_var1;
    echo $outside_var1;
}
my_function1();
echo "\n";
//print_r($GLOBALS);
//----------------------------------------------
$outside_var2 = "This is a global variable 2";
function my_function2(){
    echo $GLOBALS ["outside_var2"];
}
my_function2();
echo "\n";

