<?php
$donation = readline("how many donation have you saved?");
if ($donation >= 100) {
    echo 'you can take out your money c:'."\n";
} else {
    echo "srry you cant take out your cash \n";
}
//---------------------------------
$actualUsers = ['Aki','Eevee','Tolon','Titin'];
do {
    $newUser = readline('Put your new username tag to log: ');
    echo "\n";
} while (in_array($newUser,$actualUsers));
    echo 'you have successfully registered as: '.$newUser;
//---------------------------------
for ($i=1, $j=0 ; $i <= 10 ; $i++, $j-=2) { 
    echo "i = $i and j = $j \n";
}
//------------------------
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
//------------------------
$coffee = [
    'Latte' => 8,
    'Cappuccino' => 6.5,  
    'Americano' => 5,
    'Espresso' => 6,
    'Cortado' => 5,
    'Mocha' => 10,
    'Macchiato' => 9   
];
foreach ($coffee as $kind => $value) {
    echo "The coffee $kind currently costs: $$value dollars\n";
    if ($kind == 'Macchiato') {
        $newValue = ($value*.9);
        echo "\nThere are $kind coffee in the store and it`s in 10% off.\nThe new price is: $$newValue bucks.\n";
        break;
    }
}
?>