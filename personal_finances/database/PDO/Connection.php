<?php
namespace Database\PDO;

class Connection
{
    private static $instance; //private property
    private $connection;

    private function __construct()
    {
        $this->make_connection();
    }

    public static function get_instance()
    {
        if (!self::$instance instanceof self){ 
            self::$instance = new self();
            return self::$instance; 
        }
    }

    public function get_connection()
    {
        return $this->connection;
    }

    private function make_connection()
    {
        $server = "127.0.0.1:3307";
        $database = "personal_finances";
        $username = "root";
        $password  = "";

        try {
            $connection = new \PDO("mysql:host=$server; dbname=$database", $username, $password);
        //to use any character in our queries
            $setnames = $connection -> prepare("SET NAMES 'utf8'");
            $setnames -> execute();
            $this->connection = $connection;
        } catch (\PDOException $e) {
            die("Connection failed {$e->getMessage()}");
        }
    }
}
