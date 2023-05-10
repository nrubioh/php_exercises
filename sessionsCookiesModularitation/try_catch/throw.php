<?php

try {
    $pet=readline("what do you want to adopt?: -");
    if($pet != "cat" && $pet !="bunny")
        throw new Exception("SORRY!!!, we don`t have $pet currently", 1);
        echo "Congrats for your new $pet!";

    } catch (\Throwable $th) { // the "\" is the same than write in top "use Throwable";
        echo $th->getMessage();
}