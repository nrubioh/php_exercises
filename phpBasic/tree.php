<?php

$tree = readline("how many lines do you have for the tree size: ");

for ($i=0; $i < $tree ; $i++) { 
    echo "\n";
    for ($t=0; $t < $i ; $t++) { 
        echo "*";
    }
}
?>