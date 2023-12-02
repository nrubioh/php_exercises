<?php
class Connection
{
    private static $instance;
    private $connection;

    private function __construct(){
        $this->make_connection();
    }

    public static function get_instance(){
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function get_connection(){
        return $this->connection;
    }

    private function make_connection(){
        $server = "127.0.0.1:3307";
        $username = "root";
        $password  = "";
        $database = "users";

        $conn = new \mysqli($server, $username, $password, $database);
        if ($conn->connect_error){
            die("Conexión fallida: " . $conn->connect_error);
        }else{
            echo "Conexión exitosa a la base de datos.\n";
        }
        $conn->set_charset("utf8");
        $this->connection = $conn;
    }
}
?>



