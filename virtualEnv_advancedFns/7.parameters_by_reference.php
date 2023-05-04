<?php
/**
 * BUT RATHER -> SINO MAS BIEN...
 * PARAMETERS BY REFERENCE
 * It is not to send a variable copy but rather to send a variable's reference.
 */

$cat = "meow"; //1
function made_cat_barking(&$cat_dog){ // 3 reference of $cat is changing 
    $cat_dog = "woof"; //here the reference changed for $cat_dog
}
    made_cat_barking($cat); // 2 here you are develiring the reference 
    echo $cat."\n"; // 5 printing $cat_dog = woof