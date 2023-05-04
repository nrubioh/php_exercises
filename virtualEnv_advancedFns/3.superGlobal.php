<?php

//answer in url  -> http://localhost/superGlobal.php?cat=titin
                //answer: array(1) {["cat"]=>string(5) "titin"}
//to see parameters wrote in URL

/* echo "<pre>";
var_dump($_GLOBALS);
echo "</pre>";  */

function local_scope_example2(){
    echo $_GET["toloncito"]; 
    //you must to put URL value
}
local_scope_example2();