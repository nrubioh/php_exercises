<?php
/* echo "<pre>";   googleChrome http://localhost/superGlobal.php?cat=titin
var_dump($_GET); 
                answerarray(1) {
                    ["cat"]=>
                    string(5) "titin"
                }
echo "</pre>"; */

function local_scope(){
    echo $_GET["titincito"];
}
local_scope();  
