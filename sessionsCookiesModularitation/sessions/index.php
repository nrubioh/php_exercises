<?php
/** USE MODE.
*1) go to http://localhost/sessionsCookiesModularitation/sessions/ 
*   + login.php??user= (the array number that will you pick)
*2) you will log in that session
*3) to session close just enter in 
*   http://localhost/sessionsCookiesModularitation/sessions/logout.php
*4) now the old session is close
*/ 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <?php if ( isset ($_SESSION["iD"]) ): ?>
        <h1> Hello, <?= $_SESSION["userName"]?> ! </h1>
        <h2> Your email is: <?= $_SESSION["eMail"]?> ! </h2>
    <?php else: ?>
        <h1>you have not logged!!!</h1> 
    <?php endif; ?> 
</body>
</html>