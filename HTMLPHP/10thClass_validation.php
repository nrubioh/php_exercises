<?php
$is_float = filter_var("0.656",FILTER_VALIDATE_FLOAT);
$is_int = filter_var("564651",FILTER_VALIDATE_INT);
$is_ip = filter_var("152.2.60.1",FILTER_VALIDATE_IP);
$is_url = filter_var("https://google.com",FILTER_VALIDATE_URL);
$is_email = filter_var("xualo@gasda.com",FILTER_VALIDATE_EMAIL);

echo "<pre>";
echo var_dump($is_float);
echo var_dump($is_int);
echo var_dump($is_ip);
echo var_dump($is_url);
echo var_dump($is_email);
echo "</pre>";
