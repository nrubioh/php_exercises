<?php
// algorithms
$p = true;
$q = false;
var_dump($p && $p);
echo "<br>";
var_dump($p && $q);
echo "<br>";
var_dump($q && $q);
echo "<br>";
var_dump($p || $p);
echo "<br>";
var_dump($p || $q);
echo "<br>";
var_dump($q || $q);
echo "<br>";
var_dump(!$q || $q); // not -> boolean=true;
echo "<br>";

//op
$seconds = 7200;
$oneHour = 3600;
echo "$seconds seconds to hours are: ".$seconds/$oneHour."<br>";
echo "and left: ".($seconds % $oneHour)." seconds.";



//
?>