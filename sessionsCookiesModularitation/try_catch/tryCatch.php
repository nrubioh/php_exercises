<?php

try {
    //code...
    $result = 20/0;
    echo $result;
} catch (Throwable $e) {
    echo $e->getMessage()."<br>"; //ans: Division by zero
    echo "ups, something went wrong with you division"."<br>";
}
echo "this will happen";