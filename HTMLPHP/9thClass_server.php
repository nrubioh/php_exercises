<?php
/* echo "<pre>";
var_dump($_POST["form"]);
echo "</pre>"; */

// isset is to see if there are inputName - !empty to see if there are something
if ( isset($_POST["form"]) && !empty($_POST["form"])){
    echo 'Greetings '.$_POST["form"];
} else {
    echo 'you must to write something';
}

