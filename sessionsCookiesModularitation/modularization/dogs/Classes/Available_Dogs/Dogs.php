<?php 

namespace Available_Dogs;

class Dog {
    protected $name;
    protected $color;
    protected $age;
    protected $nickname;

    function __construct($name, $color, $age, $nickname){
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
        $this->nickname = $nickname;
    }

    public function getName(){
        return $this->name;
    }

    public function getColor(){
        return $this->color;
    }

    public function getAge(){
        return $this->age;
    }

    public function getNickname(){
        return $this->nickname;
    }

    public function sayWoof(){
        return "WOOF!";
    }
}