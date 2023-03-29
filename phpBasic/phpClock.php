<?php
//secondClock
    $seconds = readline("write the seconds: ");
    echo $seconds;
    echo "\n";

    $hours = (int)($seconds / 3600);
    $seconds = $seconds % 3600; //to get minutes.
    $minutes = (int)($seconds / 60);
    $seconds = $seconds % 60;
    echo "Are $hours hours, $minutes minutes and $seconds seconds"."\n";
//for and foreach
    $aray = array(1,2,3,4);
    for ($i=0; $i < 4 ; $i++) { 
        echo $aray[$i];
    }
    echo "\n";
    foreach($aray as $value){
        echo $value;
    }
    echo "\n";
//switch
    $vA=2;
    switch ($vA) {
        case 1:
            echo "The value is 1";
            break;
        case 2:
            echo "The value is 2";
            break;
        case 3:
            echo "The value is 3";
            break;    
        default:
            echo "The value is another number";
            break;
}
?>  