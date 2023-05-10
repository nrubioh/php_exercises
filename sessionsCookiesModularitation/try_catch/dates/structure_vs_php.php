<?php
//structure way == functions
$interval = date_interval_create_from_date_string("5 days");
$date = date_create(); //now date == null
date_add($date, $interval);
echo date_format($date , "dD-mM-Y")."\n";

//POO
$intervals = DateInterval::createFromDateString("5 days");
$dates = new DateTime();  
$dates -> add($intervals);
echo $date -> format("dD-mM-Y");
