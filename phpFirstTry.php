<?php
echo "asp worasdasdld <br>";

$vA = true;
$vB = true;

$result = $vA && $vB;
var_dump($result);

$name = "Tolon";
$city = "Totoland";

echo "<br>hello my name is ".$name." from ".$city . "<br>";
echo "the result of 4*5 is: " . (4*5). "<br>";

$people =[
    "Toloncito" => 11,
    "Titincito" => 11,
    "Antotens" => 24   
];

var_dump($people)."<br/>";
echo "<br>";
echo "<br>";
print_r($people);
echo "<br>";
echo "<br>";

$n1=4;
$n2=32;
define("PI", 3.14);
var_dump($n1*PI-$n2);
echo "<br>";
print_r($n1*PI-$n2);

echo "<br>";
echo "<br>";

//to cut the decimals or change the varType
//String to int
$height = 2.01;
$height = (int) $height;
var_dump($height);
echo "<br>";
echo "<br>";

//int to boolean
$flag = 0; //0 always will be false and other values true;
$flag = (bool) $flag;
var_dump($flag);
echo "<br>";
echo "<br>";
?>