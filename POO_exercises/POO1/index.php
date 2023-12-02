<?php
require_once("calc.php"); //require to stop the process if something is wrong

$op1 = new Operation(20,2);
$op2 = new Operation(60,5);

$totalSum = $op1 -> getSum();
    echo 'Sum total: '.$totalSum.'<br>'; 
$totalSubstract = $op1 -> getSubstract();
    echo 'Substract total: '.$totalSubstract.'<br>'; 
$totalMult = $op1 -> getMult();
    echo 'Mult total: '.$totalMult.'<br>';
$totalDivision= $op1 -> getDivision();
    echo 'Division total: '.$totalDivision.'<br><br>'; 

$totalSum = $op2 -> getSum();
    echo 'Sum total: '.$totalSum.'<br>'; 
$totalSubstract = $op2 -> getSubstract();
    echo 'Substract total: '.$totalSubstract.'<br>'; 
$totalMult = $op2 -> getMult();
    echo 'Mult total: '.$totalMult.'<br>';
$totalDivision= $op2 -> getDivision();
    echo 'Division total: '.$totalDivision.'<br><br>'; 



