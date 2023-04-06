<?php
require __DIR__ . '\vendor\autoload.php';

class Post{ //CLASSES
    private string $id = "1.2.3.6256"; //inside of the class I can to create the VAR / PROPERTY   

    private function toSay(){ // also I can to create METHODS
        return "hi of this post with $this->id"; //WITHOUT $$$$$
    }
    public function getId():string{
        return $this->id;
    }
    public function setId(string $id){
        $this->id = $id;
    }
}

$myObject1 = new Post; //OBJECTS
//echo $myObject1->id; WITHOUT $$$$
    //not work because now is a PRIVATE PROPIERTY (YOU MUST PUT THIS-> TO ACCESS)
$myObject1->setId('this string is different of GET mettod');
echo $myObject1->getId();