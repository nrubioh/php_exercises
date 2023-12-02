<?php
require_once("employee.php");

class Client extends Employee
{
    protected $fltCredit; //new property in this class 

    function __construct(int $dpi, string $name, int $age)
    {
        parent::__construct($dpi, $name, $age);
    }

    public function setcredit(float $credit) //to set the credit value 
    {
        $this->fltCredit = $credit;
    }
    public function getcredit():float //to get the credit value 
    {
        return $this->fltCredit;
    }
}//end class client