<?php

$pages = $_GET["page"] ?? null;


//require ("pages/$pages.php"); 
//is possible do that but there are warning when you wont't write there

switch ($pages) {
    case 'contact':
        require ("pages/contact.php");
        break;

    case 'services':
        require ("pages/services.php");
        break;

    default:
        require ("pages/home.php");
        break;
}
?>
