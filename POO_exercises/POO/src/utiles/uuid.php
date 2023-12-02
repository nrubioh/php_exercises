<?php 

namespace Nrh\Poo\src\utiles;

class UUID{
    public static function generate(){
        return uniqid();
    }
}