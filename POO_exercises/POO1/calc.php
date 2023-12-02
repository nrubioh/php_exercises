<?php
    class Operation{
        public $q1=0;
        public $q2=0;
        public $result=0;
    
        function __construct($intQ1,$intQ2)
        {
            $this->q1=$intQ1;
            $this->q2=$intQ2;
        }
        
        public function getSum(){
            $this->result = $this->q1 + $this->q2;
            return $this->result;
        }
        public function getSubstract(){
            $this->result = $this->q1 - $this->q2;
            return $this->result;
        }
        public function getMult(){
            $this->result = $this->q1 * $this->q2;
            return $this->result;
        }
        public function getDivision(){
            $this->result = $this->q1 / $this->q2;
            return $this->result;
        }
    }//end class