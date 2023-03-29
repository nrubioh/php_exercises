<?php
require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

function sendMail($name,$email,$subject,$body, $HTML = false){

    //initial server config https://github.com/PHPMailer/PHPMailer
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io'; 
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'e038b64710b203';
    $phpmailer->Password = '872860e5347278';

     //Recipients https://mailtrap.io/inboxes/2156080/messages
    $phpmailer->setFrom('boss@example.com','Boss1');
    $phpmailer->addAddress($email, $name); //Add a recipient

     //Content
    $phpmailer->isHTML(false); //option to send message with HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;
    /* $phpmailer->AltBody = 'This is the body in plain text for non-HTML mail clients'; */

    //to send email
    $phpmailer->send();
}
//fhztxrxsezkrewti //'sandbox.smtp.mailtrap.io'

?>