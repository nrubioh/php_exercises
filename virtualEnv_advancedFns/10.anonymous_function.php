<?php
$sum = function($n1,$n2){
    return $n1+$n2;
};
    echo $sum(5,1)."\n\n";

$numbers = [1,2,3,4,];
$numbers_by_2 = array_map(function($current){
    return $current * 2;
}, $numbers);
    print_r($numbers_by_2);
    echo "\n\n ";

//with use we can use globalsVars to local functions
$titin = "hungry";
$new_name_titin = function() use ($titin){
    echo $titin ."\n\n";
};
$new_name_titin();