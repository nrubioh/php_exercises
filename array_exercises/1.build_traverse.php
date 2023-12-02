<?php
/**
 * ways to build the array and traverse it
 */
$colors = array("blue","yellow", "red");
    var_dump($colors); //all
    var_dump($colors[0]); // blue
    print_r (count($colors)."\n"); //3
//with while.
$i = 0;
while ($i < count($colors)) {
    print $colors[$i]."\n";
    $i++;
}
//backward -> red,yellow,blue
$i = count($colors)-1;
while ($i >= 0) {
    print $colors[$i]."\n";
    $i--;
}