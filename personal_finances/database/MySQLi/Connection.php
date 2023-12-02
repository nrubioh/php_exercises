<?php
namespace Database\MySQLi;

class Connection
{
    private static $instance; //1.
    private $connection; //4.
    //to prevent a instance creation from the outside...
    private function __construct(){ //2.
        $this->make_connection(); //3.
    }

    public static function get_instance(){ //1. when is static you can call with className + method
        if (!self::$instance instanceof self) { //self == Connection
            self::$instance = new self();
        return self::$instance;
        }
    }

    public function get_connection(){ //5.
        return $this->connection;
    }

    private function make_connection(){ //3.
        $server = "127.0.0.1:3307";
        $username = "root";
        $password  = "";
        $database = "personal_finances";

        /* $mysqli = mysqli_connect($server,$username,$password,$database);
        Is it connect?
        if (!$mysqli)
            die("there aren`t connection".mysqli_connect_error()); */

        //POO
        $mysqli = new \mysqli($server,$username,$password,$database);
        if ($mysqli->connect_errno)
            die("there aren`t connection:{$mysqli->connect_error}");

        //to use any character in our queries
        $setnames = $mysqli -> prepare("SET NAMES 'utf8'");
        $setnames -> execute();
        //var_dump($setnames);
        $this->connection = $mysqli; //4.
        }
}
