<?php
/**
 * expires_or_options.
 * the time() meaning that the function will expire when is turn on
 * + 60(sec)*60(1hr)*24(1day)*30(1month)
 *
 * path.
 * if you want the cookie will be in any part of your website -> "/"
 */ 
if ( !isset( $_COOKIE[ "example_cookie"] ) ) {
    setcookie(
        name: "example_cookie",
        value: "amumispuwis",
        expires_or_options:0, //meaning when you will close the page the cookies will die
        path: "/",
        domain: "localhost",
        secure: false, //it`s true if you have https domain
        httponly: true, // to take-out front access/JS
    );
    echo 'Cookie has been created!';
}
    echo "<pre>";
    var_dump($_COOKIE);
    echo "</pre>";
?>