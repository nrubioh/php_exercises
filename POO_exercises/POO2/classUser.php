<?php
    class User{
        public $strName;
        private $strEmail;
        private $strType;
        private $strPass;
        protected $strRegistrationDate;
        static $strState = "Active";

        function __construct(string $name, string $email, string $type)
        {
            $this->strName = $name;
            $this->strEmail = $email;
            $this->strType = $type;
            $this->strPass = rand();
            $this->strRegistrationDate = date('y-m-d h:m:s');
        }

        public function getEmail():string
        {
            return $this->strEmail;
        }

        public function getType():string
        {
            return $this->strType;
        } 

        public function getPass():string
        {
            return $this->strPass;
        }

        public function setPass(string $newPass)
        {
            $this->strPass = $newPass;
        }

        public function getProfile()
        {
            echo 'User Data: '."<br>";
            echo 'Name: '. $this -> strName."<br>";
            echo 'Email: '. $this -> strEmail."<br>";  //it`s not necessary GET when is the echo in the same file.
            echo 'User Type: '. $this -> strType."<br>";
            echo 'Password: '. $this -> strPass."<br>";
            echo 'Registration Date: '. $this -> strRegistrationDate."<br>";
            echo 'User Status: '. self::$strState; //is the same class so just SELF
        }
    }