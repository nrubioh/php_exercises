<?php
/**
 * You can choose between those two controls structure.
 * Switch case is to put code and other functions in case insides.
 * Match is to choose simple things.
 */

function get_country_name_switch($country){
    $name="";
    switch ($country) {
        case 'CL':
            $name = "CHILE";
            break;
        case 'US':
            $name = "united states";
            break;
        case 'AU':
            $name = "australia";
            break;
        default:
            $name = "Idk that country";
            break;
    }
    return $name; //in the out of switch
}

function get_country_name_match($country){
    return match($country){
        "cl" => "chile",
        "us" => "united states",
        "au" => "australia",
        default => "IDK THAT COUNTRY"
    };
}

echo get_country_name_match(readline("Which country? "));
echo "\n";
