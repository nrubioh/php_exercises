<?php

require("mail.php");

function validate($name,$email,$subject,$message){
    return !empty(trim($name)) && !empty(trim($email)) && !empty(trim($subject)) && !empty(trim($message));
}

$status="";

if( isset($_POST["form"]) ){
    if(validate($_POST['name'], $_POST['email'], $_POST['subject'],$_POST['message'])){
        $name = htmlentities($_POST['name']);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $subject = htmlentities($_POST['subject']);
        $message = htmlentities($_POST['message']);

        $body = "$name <$email> sent you the follow message: <br><br> $message";
        
        /* to send message */
        sendMail($name,$email,$subject,$message, true);

        $status = "success";
    } else{
        $status = "danger";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Contact Form</title>
</head>
<body>

    <?php if($status==="success"):?>
    <div class="alert success">
        <span>ALL GOOD!</span>
    </div>
    <?php endif;?>

    <?php if($status==="danger"):?>
    <div class="alert danger">
        <span>PROBLEM!</span>
    </div>
    <?php endif;?>
    
    <form action="./index.php" method="POST">
        <h1>Contact us</h1>

        <div class="input-group">
            <label for="name">NAME</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="input-group">
            <label for="email">E-MAIL</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="input-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject">
        </div>
        <div class="input-group">
            <label for="message">MESSAGE</label>
            <textarea name="message" id="message"></textarea>
        </div>

        <input type="hidden" name="form" value="submitted">
        <div class="button-container">
            <button type="submit">SENT</button>
        </div>
        <div class="contact-info">
            <div class="info">
                <span><i class="fas fa-map-marker-alt"></i> 13 Saw Mill Circle, North Olmested.</span>
            </div>
            <div class="info">
                <span><i class="fas fa-phone"></i> +1 123 456 7890</span>
            </div>
        </div>
    </form>
    <script src="https://kit.fontawesome.com/bbff992efd.js" crossorigin="anonymous"></script>
</body>
</html>