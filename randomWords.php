<?php

$words=array("sun","moon","sky");
$randomWords=array();

for ($i=0; $i < 3 ; $i++) { 
    $randomWords[$i] = str_shuffle($words[$i]);
}
print_r($randomWords); //print is for arrays, echo for strings

echo " 
<form action='randomWords2.php'>
    <input type='text' name='w0'>
    <input type='text' name='w1'>
    <input type='text' name='w2'>
    <button type='submit'>Sent</button>
</form>
";
?>