<?php
require_once("classUser.php");

$objUser1 = new User("Tolon", "tolon@gmail.com", "Admin");
$objUser2 = new User("Titin", "titinBellako@live.com", "Perkin");

echo $objUser1 -> strName."<br>";
echo $objUser1 -> getEmail()."<br>";
echo $objUser1 -> getType()."<br>";
echo $objUser1 -> getpass()."<br>";
echo User::$strState."<br><br>"; //static is property of class not object

echo $objUser1 -> getProfile()."<br><br>"; //random pass
echo $objUser1 -> setPass('asdkjajsdknasd6256236');//set password
echo $objUser1 -> getProfile()."<br><br><br>"; //write down new pass

echo $objUser2 -> getProfile();





