<?php
//youtube class to single arrayList
$carBrands = array("toyota" ,"mercedes","kia","nissan","ford","bmw"); 
$arraySize = sizeof($carBrands); //when the code is too long you must to make a newVar (just speed)

echo 'THIS IS A FOR BUCKLE <br>';
    for ($i=0; $i < $arraySize ; $i++){ 
        echo $carBrands[$i].'<br>';
    }
echo '<br><br>';

echo 'THIS IS A FOR_EACH BUCKLE <br>';
    foreach($carBrands as $brands){
        echo $brands.'<br>';
    }
echo '<br><br>';

//youtube class to double arrayList 
//https://www.youtube.com/watch?v=_X2DWUvf4QM&list=PLD15A0EB894216305&index=22

$list = array(
        'User 1:' => array('name'=>'Thomas' ,'gender'=> 'Male','profession'=> 'Nurse'),
        //if you don't put a array name (user_1 ex) then, just it will appear number 0.
        'User 2:' => array('name'=> 'Antonia','gender'=> 'Female','profession'=> 'Nurse'), 
        'User 3:' => array('name'=> 'Tolon','gender'=> 'Female','profession'=> 'NurseAssist'),
        );
echo 'THIS IS A FOR_EACH BUCKLE, DOUBLE ARRAY <br><br>';
foreach($list as $users => $userInformation){
    echo '<strong>'.$users.'</strong>'.'<br>';

    foreach ($userInformation as $content) {
        echo $content.'<br>';
    }
}
echo '<br><br>';

//switch code class
$months = 'march';
switch ($months) {
    case 'december':
    case 'january':
    case 'february':
        echo 'in this month you may to have holidays :)';
        break;
    case 'july':
        echo 'in this month maybe you will have winter vacations :0';
    default:
        echo 'you must to work mate :\'c';
        break;
}
echo '<br><br>';

//return and $ in fns
$day=16;
$month='november';
$year=2023;
function displayDate(){
    GLOBAL $day,$month,$year;
    return $day.'/'.$month.'/'.$year;
}
echo displayDate().'<br><br>';
?>