<?php 
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    
    $connection7 = Connection::get_instance()->get_connection();
    $query = $connection7->query("DELETE FROM users WHERE id=$id");        
        
    if ($query == 1) {
        echo '<div class="alert alert-success">The user was correctly deleted</div>';
    } else{
        echo '<div class="alert alert-danger">The user was not deleted</div>';
    }
}
?>