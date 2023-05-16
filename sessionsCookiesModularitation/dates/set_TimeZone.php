<?php

//set time zone
date_default_timezone_set("America/Santiago");//https://www.php.net/manual/en/timezones.america.php

//get actual date
//if you want to show inmediatly the date, you must to use this.
$actualDate = date("Y-m-d H:i:s");
    echo $actualDate."\n\n"; 

//return a dateTime - object
//if you want to manipulate the date, you must to use this one.
$actualDate2 = date_create();
// or "$actualDate2 = new DateTime();"
//echo $actualDate2; Ans: Fatal error: Uncaught Error: Object of class DateTime could not be converted to string.

// string to time / UNIX numbers answer
    echo strtotime($actualDate)."\n";
    echo strtotime("+1 year")."\n";
    echo strtotime("07 Sept 2022")."\n";
    echo strtotime("next Monday")."\n";
    echo strtotime("last Wednesday")."\n\n";

$unix_time_TEST = strtotime("last Friday");
    echo date("Y-m-d H:i:s", $unix_time_TEST)."\n";
$unix_time_TEST2 = strtotime("next Monday");
    echo date("Y-m-d H:i:s", $unix_time_TEST2)."\n";

//Immutable Dates
$actualdate3 = new DateTimeImmutable();

