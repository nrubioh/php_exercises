<?php
abstract class Person{
    public $intDPI;
    public $strName;
    public $intAge;
    public $strMessage;

    function __construct(int $dpi, string $name, int $age)
    {
        $this->intDPI = $dpi;
        $this->strName = $name;
        $this->intAge = $age; 
    }
    
    abstract public function getPersonalData();
    abstract public function setMessage(string $message);
    abstract public function getMessage():string;
}//end class person