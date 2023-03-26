<?php
$username = ($_POST["inputName"]);
$userSurName = ($_POST["inputSurName"]);
$userEmail = ($_POST["inputEmail"]);
$userPhone = ($_POST["inputPhone"]);

$htmlentities=htmlentities($username);
$addslashes=addslashes($userSurName);//if there are ' the fn will put /'
$justWords = preg_replace("/\d/","",$userEmail);
$justNumbers = preg_replace("/\D/","",$userPhone);
//another fns
$email = filter_var($userEmail,FILTER_SANITIZE_EMAIL);
$sanitize_int = filter_var($userPhone,FILTER_SANITIZE_NUMBER_INT); 

/* echo "<pre>";
var_dump($_POST["form"]);
echo "</pre>"; */
// isset is to see if there are inputName - !empty to see if there are something
if ( isset($_POST["form"]) && !empty($_POST["form"])){
    echo 'Greetings '.$_POST["form"];
} else {
    echo 'you must to write something';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserData</title>
</head>
<body>
    <p><b>UserName: </b></p>
    <?=$htmlentities?> <!-- example <div style="background: red;">hello mdf</div> -->
    <p><b>Surname: </b></p>
    <?=$addslashes?> <!-- example asdas'asdas -->

    <p><b>Email: </b></p>
    <?=$justWords?> <!-- example asd464asd@asdas.com -->
    
    <p><b>PhoneNumber: </b></p>
    <?=$justNumbers?> <!-- 659.6652 -->
    
</body>
</html>



