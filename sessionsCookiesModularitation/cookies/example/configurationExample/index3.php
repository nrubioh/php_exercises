<?php

setcookie(
    name: "example_cookie2",
    value: "this cookies just is available in configurationExample",
    expires_or_options:0, //meaning when you will close the page the cookies will die
    path: "/cookies/example/configurationExample/", 
        //it`s not just only in index 3, 
        //also it will be available to another configurationExample/... files
    domain: "localhost",
    secure: false, //it`s true if you have https domain
    httponly: true, // to take-out front access/JS
);
echo 'Cookie2 has been created!';

    echo "<pre>";
    var_dump($_COOKIE);
    echo "</pre>";  
?>