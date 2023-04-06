<?php
require __DIR__ . '\vendor\autoload.php';

class Post{ //CLASSES
    public string $id = "1.2.3"; //inside of the class I can to create the VAR / PROPERTY   

    public function toSay(){ // also I can to create METHODS
        return "hi of this post";
    }
}

$myObject1 = new Post; //OBJECTS

echo $myObject1->id;
echo $myObject1->toSay();