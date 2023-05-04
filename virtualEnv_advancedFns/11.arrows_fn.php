<?php

$atm_account = 12;
//you can read the $var inside of the FN but NOT changes its value
$atm_depot = fn($howMuch) => $atm_account + $howMuch;
    echo $atm_depot(18)."\n"; //answer : 30

$add_one_cat = fn($current_cats) => $current_cats + 1;
    echo $add_one_cat(8).' lifes'."\n";

$ages = [2,65,50,18,3,12,16];
//arrow_fn
    $adult1 = array_filter($ages,fn($current) => $current >= 18 );
        print_r ($adult1);
        echo "\n";

//anonymous_fn 
    $adult2 = array_filter($ages, function($current){
        return $current >= 18;
});
    print_r ($adult2);
    echo "\n";

$where_am_i = "House";
$change_where_am_i = fn(&$where_am_i) => $where_am_i = "newHouse";
$change_where_am_i($where_am_i);
    echo $where_am_i; //answer: newHouse

