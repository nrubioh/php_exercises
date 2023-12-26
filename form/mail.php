<?php
require("vendor/autoload.php");
use PHPMailer\PHPMailer\PHPMailer;

function sendMail($name, $email, $subject, $body, $HTML = false)
{
    // Load configuration
    $config = include('config.php');

    // Initial server config https://github.com/PHPMailer/PHPMailer
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = $config['smtp']['host'];
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = $config['smtp']['port'];
    $phpmailer->Username = $config['smtp']['username'];
    $phpmailer->Password = $config['smtp']['password'];

    // Recipients https://mailtrap.io/inboxes/2156080/messages
    $phpmailer->setFrom($config['sender']['email'], $config['sender']['name']);
    $phpmailer->addAddress($email, $name); // Add a recipient

    // Content
    $phpmailer->isHTML(false); // Option to send message with HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body = $body;

    // To send email
    $phpmailer->send();
}
?>