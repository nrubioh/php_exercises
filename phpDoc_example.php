<?php

/**
 * function su is to sum two numbers 
 * 
 * @param int $n1 
 * @param int $n2
 * @return void
 */

function sum($n1,$n2){
    return $n1 + $n2;
}
$result = sum(2,23123);
echo $result;
echo "\n";

define ("TOLONCITO","TOLOOON");
const PI = 856461.656;
echo PI;
echo "\n";

/**
 * This if is to explain why you cant using constant inside of if
 * @param boolean $choise
 */
$choise = true;
if ($choise) {
    //CONST BLOCK_CONSTANT = "This const was declared inside of if");
    define ("BLOCK_CONSTANT", "This const was declared inside of if");
    echo BLOCK_CONSTANT;
}
//magic constants
echo "\n";
echo E_ERROR;
echo "\n";
echo PHP_VERSION;
echo "\n";
echo __LINE__;
