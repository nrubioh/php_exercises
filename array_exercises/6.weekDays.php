<?php
$day = array("Mon","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");

$i=count($day)-1;
while ($i >= 0){
    print $day[$i]."\n";
    $i--; 
}

$reverseDay = array_reverse($day);
foreach ($reverseDay as $reverse) {
    print $reverse."\n";
}