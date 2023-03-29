<?php
// algorithms
$p = true;
$q = false;
var_dump($p && $p);
var_dump($p && $q);
var_dump($q && $q);
var_dump($p || $p);
var_dump($p || $q);
var_dump($q || $q);
var_dump(!$q || $q); // not -> boolean=true;
echo"<br>";
echo"<br>";
//op
$seconds = 7200;
$oneHour = 3600;
echo "$seconds seconds to hours are: ".$seconds/$oneHour."<br>";
echo "and left: ".($seconds % $oneHour)." seconds."."<br>";
echo"<br>";

//Comparison Operators
$a=1;
$b=2;
$c="2";

var_dump($a == $b); //iqual;
echo"<br>";
var_dump($b == $c);
echo"<br>";
var_dump($b === $c);//identical;
echo"<br>";

var_dump($a != $b); //diferent - this operator not compare types (true);
echo"<br>";
var_dump($b != $c); //(false);
echo"<br>";

var_dump($a !== $b); //not identical - this operator compare types (true);
echo"<br>";
var_dump($b !== $c); //(true);
echo"<br>";

//spaceShip operator
echo(1 <=> 2)."<br>"; //if the left is bigger than right the result will be -1;
echo(1 <=> 1)."<br>"; // zero;
echo(2 <=> 1)."<br>";// if left is smaller than right == 1;

//null function (which is the first VAR defined)
echo $c??$b??$a; // result: 2

?>