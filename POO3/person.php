<?php
class Person{
    public $intDPI;
    public $strName;
    public $intAge;

    function __construct(int $dpi, string $name, int $age)
    {
        $this->intDPI = $dpi;
        $this->strName = $name;
        $this->intAge = $age; 
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
}//end class person