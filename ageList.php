<?php
$ages = array(rand(1,8));

function ageList($ages){
    foreach ($ages as $age){
        switch ($age) {
            case $age > 0 && $age < 5:
                echo $age." the space will be at the shelf bottom"."\n";
                break;
            case $age >= 5 && $age <= 7:
                echo $age." the space will be at the shelf middle"."\n";
                break;
            case $age > 7:
                echo $age." the space will be at the shelf top"."\n";
                break;
            default:
                echo $age." not defined age: the space will be next to the shelf";
                break;           
        }
    }
}
ageList($ages);
?>