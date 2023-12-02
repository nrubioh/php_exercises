<?php
namespace App\Controllers;
use Database\PDO\Connection;

class WithdrawalsControllers
{
    private $connection;
    public function __construct(){
        $this->connection = Connection::get_instance()->get_connection();
    }

    public function index()
    {
    //<------ Fetch-all------->
        //this return a PDO_statement / FOR THAT REASON, it has to save in $stmt 
        $stmt = $this->connection->prepare("SELECT * FROM `withdrawals`");
        $stmt->execute();

        $result = $stmt->fetchAll(); //to array convert
        //var_dump($result);
        foreach ($result as $instant) {
            echo "It was spent $instant[amount] dollars in: $instant[description] \n"; 
        }
    //<------ Fetch-all Column ------->
        /* $stmt = $this->connection->prepare("SELECT amount, description FROM `withdrawals`");
        $stmt->execute();

        $result = $stmt->fetchAll(\PDO::FETCH_COLUMN, 0);
        foreach ($result as $instant) {
            echo "It was spent $instant dollars.\n";
        } */
    } //showList of one resource
    public function create(){} //showForm to create one resource
    public function store($data)
    {
    //<------ 3 exec query ------->
        /* $connection = Connection::get_instance()->get_connection();
        $affected_rows = $connection->exec("INSERT INTO `withdrawals` 
        (payment_method, type, date, amount, description) VALUES (
            {$data['payment_method']},  
            {$data['type']},
            '{$data['date']}',
            {$data['amount']},
            '{$data['description']}'
        )");
            echo "there are $affected_rows rows in the DataBase"; */

    //<------ 4 prepare query ------->
        /* $connection = Connection::get_instance()->get_connection();
        $stmt = $connection->prepare("INSERT INTO `withdrawals`
            (payment_method, type, date, amount, description) 
            VALUES (:payment_method, :type, :date, :amount, :description)");
        $stmt->execute($data); */
        /* 
        $stmt->execute($data); in this case is the same than associative array 
        but as all index query is saving in $data atributte is not necessary to put in.
        (["payment_method" => 1
        "type" => 1....etc]);
        */

    //<------ 5 bindParam------->
        /* $connection = Connection::get_instance()->get_connection();
        $stmt = $connection->prepare("INSERT INTO `withdrawals`
            (payment_method, type, date, amount, description) 
            VALUES (:payment_method, :type, :date, :amount, :description)");

        $stmt->bindParam(":payment_method", $data["payment_method"]);
        $stmt->bindParam(":type", $data["type"]);
        $stmt->bindParam(":date", $data["date"]);
        $stmt->bindParam(":amount", $data["amount"]);
        $stmt->bindParam(":description", $data["description"]);

        $data["description"] = "expend in myself";

        $stmt->execute();*/

    //<------ 6 bindValue------->
        /* $connection = Connection::get_instance()->get_connection();
        $stmt = $connection->prepare("INSERT INTO `withdrawals`
            (payment_method, type, date, amount, description) 
            VALUES (:payment_method, :type, :date, :amount, :description)");

        $stmt->bindValue(":payment_method", $data["payment_method"]);
        $stmt->bindValue(":type", $data["type"]);
        $stmt->bindValue(":date", $data["date"]);
        $stmt->bindValue(":amount", $data["amount"]);
        $stmt->bindValue(":description", $data["description"]);

        $data["description"] = "expend in myself";

        $stmt->execute(); */

    //<------ 6 outside Construct bindValue ------->
        $stmt = $this->connection->prepare("INSERT INTO `withdrawals`(payment_method, type, date, amount, description) VALUES (:payment_method, :type, :date, :amount, :description)");

        $stmt->bindValue(":payment_method", $data["payment_method"]);
        $stmt->bindValue(":type", $data["type"]);
        $stmt->bindValue(":date", $data["date"]);
        $stmt->bindValue(":amount", $data["amount"]);
        $stmt->bindValue(":description", $data["description"]);

        $data["description"] = "expend in myself";
        $stmt->execute();
    
    } //to save in DB a new resource
    public function show($id)
    {
    //<------ Fetch------->
        $stmt = $this->connection->prepare("SELECT * FROM `withdrawals` WHERE id=:id");
        $stmt->execute([
            ":id"=>$id
        ]);
        $result = $stmt->fetch(\PDO::FETCH_ASSOC); //JUST FOR PRINT ASSOCIATIVE ARRAYS
        //var_dump($result);
        echo "The record with the id $id tell that you spend: {$result['amount']} dollars in, {$result['description']}";
    } //to show ONE specific resource
    public function edit(){} //to show a form for edit one resource
    public function update($data,$id)
    {
        $stmt = $this->connection->prepare("UPDATE `incomes` SET 
            payment_method = :payment_method, 
            type = :type, 
            date = :date,
            amount = :amount,
            description = :description
        WHERE id = :id;");
        
        $stmt->execute([
            "id"=>$id,
            "payment_method"=>$data["payment_method"],
            "type"=>$data["type"],
            "date"=>$data["date"],
            "amount"=>$data["amount"],
            "description"=>$data["description"],
        ]);
    } // update a specific resource BUT in DB
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
