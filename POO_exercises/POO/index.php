<?php

require __DIR__ . '\vendor\autoload.php';

use Nrh\Poo\Post; //import the class 

$myObject1 = new Post("this is the first post"); //OBJECTS

//echo $myObject1->id; WITHOUT $$$$
    //not work because now is a PRIVATE PROPIERTY (YOU MUST PUT THIS-> TO ACCESS)
//$myObject1->setId('this string is different of GET mettod');
//echo $myObject1->getId();
echo $myObject1->getMessage();

