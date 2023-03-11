<?php

$pkms=array("zapdos","moltres","articuno","lugia","ho-oh");
print_r($_REQUEST);
for ($i=0; $i < count($pkms); $i++){ 
    if($_REQUEST["word".$i]==$pkms[$i]){
        echo "the word is correct.<br>";
    } else {
        echo "the word is incorrect"."<br>"."the correct word is: "
        .$pkms[$i]."<br>";
    }
}
?>