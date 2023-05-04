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
            $name = "UNITED STATES";
            break;
        case 'AU':
            $name = "AUSTRALIA";
            break;
        default:
            $name = "IDK THAT COUNTRY";
            break;
    }
    return $name; //in the out of switch
}
    echo get_country_name_switch(readline("Which country? (CAPS LOCKS): "));
    echo "\n";


function get_country_name_match($country){
    return match($country){
        "cl" => "chile",
        "us" => "united states",
        "au" => "australia",
        default => "idk that country"
    };
}
    echo get_country_name_match(readline("Which country? "));
    echo "\n";
