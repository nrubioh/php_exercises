<?php
$name = 'Nick';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> php as html preprocessor </title>
</head>
<body>
    <h1>Hello from PHP using HTML!</h1>
    <?php echo"<p>now I`m gonna print with php</p><br>2nd paragraph";?>
    <?= "<br><i><br>another way to write paragraph in HTML</i><br><br>"?>
    <?= "Hello $name";?>
</body>
</html>