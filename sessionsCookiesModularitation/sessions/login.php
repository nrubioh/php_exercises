<?php

session_start();

$users = [
    array(
        "username"=>"Tolon",
        "email" => "totis@gmail.com"

    ),
    array(
        "username"=>"titin",
        "email" => "titin@gmail.com"

    ),
    array(
        "username"=>"eevee",
        "email" => "eevee@gmail.com"
    )
];

$user= $_GET["user"]??""; //it`s like readline() 
//echo "the user choise is: ".$users[$user]["username"]; //the user choise is: titin
$_SESSION["iD"] = $user;
$_SESSION["userName"] = $users[$user]["username"];
//array $users to (the user I picked by url) -> username or email, etc
$_SESSION["eMail"] = $users[$user]["email"];
