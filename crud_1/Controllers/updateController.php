<?php
if (!empty($_POST["btnUpdate"])) { //related with <input name>
    if (!empty($_POST["InputRut"]) and !empty($_POST["InputName"]) and !empty($_POST["InputLastName"]) and !empty($_POST["InputEmail"]) and !empty($_POST["InputPhoneNumber"]) and !empty($_POST["InputComments"])){
        $id = $_POST["InputId"];
        $rut = $_POST["InputRut"];
        $name = $_POST["InputName"];
        $lastname = $_POST["InputLastName"];
        $email = $_POST["InputEmail"];
        $phonenumber = $_POST["InputPhoneNumber"];
        $comments = $_POST["InputComments"];

        $connection6 = Connection::get_instance()->get_connection();
        $query = $connection6->query("UPDATE users SET rut='$rut', name='$name', lastname='$lastname', email='$email', phone='$phonenumber', comments='$comments' WHERE id=$id");

        if ($query == 1) {
            header("location:index.php");
        } else{
            echo '<div class="alert alert-danger">Error updating user</div>';
        }
    } else {
        echo "<div class='alert alert-warning'>there are empty fields</div>";
    }
}
?>