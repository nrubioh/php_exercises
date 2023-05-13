<?php
//structure way == functions
$interval = date_interval_create_from_date_string("5 days"); //return a dateInterval
$date = date_create(); //now date == null (return an dateTime object)
date_add($date, $interval); //return an dateTime object
    echo date_format($date , "dD-mM-Y")."\n";

//POO
$intervals = DateInterval::createFromDateString("6 days");
$dates = new DateTime(); //new instance of DateTime CLASS
$dates -> add($intervals);
    echo $dates -> format("dD-mM-Y")."\n";
