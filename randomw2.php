<?php
$pkmsan=array("zapdos","moltres","articuno","lugia","ho-oh");
/* echo var_dump($_REQUEST);  */
for ($i=0; $i < count($pkmsan) ; $i++){ 
    if($_REQUEST["word_".$i."_"] == $pkmsan[$i]){
        echo "the word is correct"."<br>";

    } else{
        echo "the word is incorrect, the true word is: ".
        $pkmsan[$i]."<br>";
        
    }
}
