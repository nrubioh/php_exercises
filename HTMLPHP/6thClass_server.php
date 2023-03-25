<?php

$name = $_GET["inputName"];
$age = $_GET["inputAge"];

$name2 = $_POST["inputName2"];
$age2 = $_POST["inputAge2"];

echo "<pre>";
print_r($_GET);
echo "</pre>";

echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "Hello $name, you are $age years old <br>";

echo "Hello $name2, you are $age2 years old";