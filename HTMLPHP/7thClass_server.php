<?php
echo "<pre>";
print_r ($_FILES);
echo "</pre>";

$baseName = $_FILES["imageName"]["name"];
echo strtoupper('the picture`s name is: '.$baseName).'<br>';
$baseSize = $_FILES["imageName"]["size"];
echo strtoupper('the picture`s size is: '."<strong>$baseSize</strong>".
' bytes').'<br>';

/* to move the image to another dictory */
$baseLocation = $_FILES["imageName"]["tmp_name"]; //in this location the file is saved (see the chrome)
$uploadRute = "7thClass_imageSave/$baseName"; //new file create
move_uploaded_file($baseLocation,$uploadRute); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?=$uploadRute?>" alt="<?=$baseName?>">
</body>
</html>