<?php
require_once("employee.php");
require_once("client.php");

$objEmployee1 = new Employee(365456, "Tolonial", 11);
$objEmployee1->setPosition("BOSS");
$objEmployee1->setMessage("Welcome to the company mr/s: ");

echo $objEmployee1->getMessage();
echo $objEmployee1->getPersonalData();
echo 'Actual Position: '.$objEmployee1->getPosition();


$objClient1 = new Client(59696, "Titin", 11);
$objClient1->setCredit(695.365965);
$objClient1->setMessage("Welcome to buy mr/s: ");
echo "<br><br>";
echo $objClient1->getMessage();
echo $objClient1->getPersonalData();
echo 'Credits: '.$objClient1->getCredit();