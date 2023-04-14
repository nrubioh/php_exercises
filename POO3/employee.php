<?php
require_once("person.php");

class Employee extends Person
{
    protected $strPosition; //new property in this class 

    function __construct(int $dpi, string $name, int $age)
    {
        parent::__construct($dpi, $name, $age);
    }

    public function setPosition(string $position) //to set the position value 
    {
        $this->strPosition = $position;
    }
    public function getPosition():string //to get the position value 
    {
        return $this->strPosition;
    }

}//end class employee