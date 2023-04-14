<?php

namespace Nrh\Poo; //export the class
use Nrh\Poo\src\utiles\UUID;

class Post{ //CLASSES
    private string $id; //inside of the class I can to create the VAR / PROPERTY
    
    public function __construct(private string $message){
        print_r("A new Post object it was created \n");
        $this -> id = UUID::generate();
    }

    private function toSay(){ // also I can to create METHODS
        return "hi of this post with $this->id"; //WITHOUT $$$$$
    }
    public function getId():string{
        return $this->id;
    }
    public function setId(string $id){
        $this->id = $id;
    }
    public function getMessage(){
        return $this->message;
    }
}