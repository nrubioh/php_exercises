<?php

function calc_triangle_area(int $base, int $height, string $who){
    return "Hello $who!, your triangle area is: ". ($base * $height) / 2 . "cms \n"; 
}
echo calc_triangle_area(6,3,"eevee"); //answer:9


function sum(int $n1, int $n2, int $n3): int{
    return $n1+$n2+$n3;
}
    echo sum(5,6,4)."\n"; //answer:15


class Dummie{
    public $one_value = "anything";
}
function substract(Dummie $n1, int $n2, int $n3):void{ //if you write void you can`t return anything
    echo $n1->one_value." ".$n2-$n3;
}
echo substract(new Dummie,5,3)."\n"; //answer: anything 2