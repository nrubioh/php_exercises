<?php

require __DIR__ . '/../vendor/autoload.php'; 

/* DIR = ROOT ADDRESS 
var_dump(__DIR__ . '/../vendor/autoload.php'); 
string(68) "C:\xampp\htdocs\phpExcersices\INTRO_FM\public/../vendor/autoload.php" */

$request = new App\Http\Request;
$request->send();

