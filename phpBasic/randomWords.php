<?php
$pkms=array("zapdos","moltres","articuno","lugia","ho-oh");
/* $randomWords=array(); */ //Now we are gonna use strings.
$form="<form action='randomw2.php'>"; //form action is to link to another form
for ($i=0; $i < count($pkms); $i++){ 
    $form .= "The pkm: ".str_shuffle($pkms[$i])." ".
    "<input type='text' name='word.$i.'>".
    "<br>";
}
$button="<button type='submit'>Sent</button>";
$fform="</form>";
echo $form.$button.$fform;
?>