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
    
    public function getPersonalData()
    {
        $data = "
            <h2>Personal Data</h2>
            DPI: {$this->intDPI}<br>
            Name: {$this->strName}<br>
            Age: {$this->intAge}<br>
        ";
        return $data;
    }
    public function setMessage(string $message)
    {
        $this->strMessage = $message;
    }
    public function getMessage():string
    {
        return $this->strMessage.''.$this->strName;
    }

}//end class employee