<?php
$is_it_about_nick = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals</title>
</head>
<body>
    <!-- it isn`t the way --> 
    <p>1st way</p>
    <?php if($is_it_about_nick){
        echo "<p>yes, it was talk about nick</p>";
    } else {
        echo "<p>noup, :D!;</p>";
    }?>
    <!-- it isn`t the way -->
    <p><b>2nd way</b></p>
    <?php if($is_it_about_nick){ ?>
        <p><b>yes, it was talk about nick</b></p>
    <?php } else { ?>
        <p><b>noup, :D!</b></p>
    <?php } ?>
    <!-- it`s the way -->
    <p><b>3rd way</b></p>
    <?php if($is_it_about_nick):?>
        <p><b>yes, it was talk about nick</b></p>
    <?php else:?>    
        <p><b>noup, :D!</b></p>
    <?php endif;?>
</body>
</html>