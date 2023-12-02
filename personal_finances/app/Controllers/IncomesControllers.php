<?php
namespace App\Controllers;
use Database\PDO\Connection;

class IncomesControllers
{
    private $connection;
    public function __construct(){
        $this->connection = Connection::get_instance()->get_connection();
    }

    public function index(){
    //<------ NORMAL FETCH WITH WHILE FOR CALL ALL ROWS! ------->
        /* $stmt = $this->connection->prepare("SELECT * FROM `incomes`");
        $stmt->execute();

        while ($row = $stmt->fetch()) {
            echo $row['id'].": You have earned ".$row["amount"]." USD in: ". $row["description"]."\n";
        } */
    //<------ bindColumn + NORMAL FETCH WITH WHILE FOR CALL ALL ROWS! ------->
        $stmt = $this->connection->prepare("SELECT * FROM `incomes`");
        $stmt->execute();
        
        //optional, if you remove the option it will throw an "error"
        $amount = null; 
        $description = null;
        $id = null;

        $stmt->bindColumn("id",$id);
        $stmt->bindColumn("amount",$amount);
        $stmt->bindColumn("description",$description);

        while ($stmt->fetch()) {
            echo  "$id: You have earned $amount USD in: $description \n";
        }
    } //showList of one resource
    public function create(){} //showForm to create one resource
    public function store($data) 
    {
    //<------1 MySQLi query------->
        /* $connection = Connection::get_instance()->get_connection();
        $connection->query("INSERT INTO `incomes` (payment_method,type,date,amount,description) 
        VALUES(
            {$data['payment_method']},
            {$data['type']},
            '{$data['date']}',
            {$data['amount']},
            '{$data['description']}'
            );
        "); */

    //<------2 MySQLi prepare bind_param ------->
        /* $connection = Connection::get_instance()->get_connection();
        
        $stmt = $connection->prepare("INSERT INTO incomes (payment_method,type,date,amount,description)
        VALUES(?,?,?,?,?);");

        $stmt->bind_param("iisds",$payment_method,$type,$date,$amount,$description);

        $payment_method = $data['payment_method'];
        $type = $data['type'];
        $date = $data['date'];
        $amount = $data['amount'];
        $description = $data['description'];

        $stmt->execute();
            echo "{$stmt->affected_rows} rows have been inserted in the DB"; */
    
    //<------2 PDO prepare bindParam + __construct method ------->
        $stmt = $this->connection->prepare("INSERT INTO `incomes` (payment_method,type,date,amount,description)
        VALUES (:payment_method, :type, :date, :amount, :description)");

        $stmt->bindParam(":payment_method",$data["payment_method"]);
        $stmt->bindParam(":type",$data["type"]);
        $stmt->bindParam(":date",$data["date"]);
        $stmt->bindParam(":amount",$data["amount"]);
        $stmt->bindParam(":description",$data["description"]);

        $stmt->execute();
    }//to save in DB a new resource
    public function show(){} //to show ONE specific resource
    public function edit(){} //to show a form for edit one resource
    public function update(){} // update a specific resource BUT in DB
    public function destroy($id)
    {
        $this->connection->beginTransaction();
        //Particular case: $this->connection->("DROP TABLE `incomes`"); beginTransaction will be ignored
        
        $stmt = $this->connection->prepare("DELETE FROM `incomes` WHERE id=:id");
        $stmt->execute([
            ":id" => $id
        ]);

        $areYouSure = readline("Are you sure about deleting the record?: ");
        if(strtoupper($areYouSure) == "YES" || ($areYouSure) == "yes"){
            $this->connection->commit();
        } else {
            $this->connection->rollback();
        }
    } //delete a specific resource in DB
}