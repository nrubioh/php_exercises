<?php 
require ("Classes/Adopted_Dogs/Dogs.php");
require ("Classes/Available_Dogs/Dogs.php");


/** Previously just there had one "Dog" class. But now such as there are 2 kinds 
* of Dog Classes, so you can to summon the class in this way.

* $example = new Available_Dogs(namespace)\Dog("Eevee","WhiteBrown",6,"Eevania");

* Also it can to write use comand to summon but also is necessary to write 
* another nickname:*/

use Available_Dogs\Dog;
use Adopted_Dogs\Dog as HappyDog;

$eevee = new Dog("Eevee","WhiteBrown",6,"Eevania");
$colita = new Dog("Colitas","White",6,"ColisGordis");
$matilda = new Dog("Maltilda","BlackWhite",6,"Matispatis");

$eeveeOwner = new HappyDog("Eevee", new DateTime("2017-08-09"),"Mikespowas");
$colitaOwner = new HappyDog("Colitas", new DateTime("2010-01-09"),"Mom");
$matildaOwner = new HappyDog("Maltilda", new DateTime("2007-03-03"),"Mom");