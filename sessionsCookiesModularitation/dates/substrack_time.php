<?php

//substrack between time
$today = new DateTime();
$tolon_Birthday = new DateTime("2011-04-03");
$time_interval = $tolon_Birthday->diff($today);
    echo $time_interval->format("it has been %y years with %d days.")."\n";

/**How to create date from some format()
 * The fn "createFromFormat" is to write the date in ANY format BUT you have to specify (ex: "D d M Y").
 * The fn will convert the Date in DateTime Object
 * If you want to call the object you must to manipulate it.
 */
$create_date = DateTime::createFromFormat("D d M Y","Sun 16 Sept 1990");
    echo $create_date->format("Y-m-d H:i:s")."\n";

//Date modify
$today->modify("+1 day +2 months");
    echo $today->format("Y-m-d")."\n";