<?php
/**
*With names arguments is not necessary put variable. (check the line 15) 
*This example is just to know that 
*Changing the order of factors does not change the product
*
* @param [string] $name
* @param [int] $age
* @param [string] $city
* @return void
*/
function get_person_info($name, $age, $city){
    echo "$name Cat, actually is living in $city and his actual age is: $age years old";
    echo "\n";
}
get_person_info(age: 11, name: "Tolon", city: "Santiago");