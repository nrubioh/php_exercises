<?php
require_once("employee.php");
require_once("client.php");

$objEmployee1 = new Employee(365456, "Tolonial", 11);
$objEmployee1->setPosition("BOSS");

echo $objEmployee1->getPersonalData();
echo 'Actual Position: '.$objEmployee1->getPosition();

$objClient1 = new Client(59696, "Titin", 11);
$objClient1->setCredit(695.365965);

echo $objClient1->getPersonalData();
echo 'Credits: '.$objClient1->getCredit();