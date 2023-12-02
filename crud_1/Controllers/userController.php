<?php

if (!empty($_POST["btnCreate"])) {
    if (!empty($_POST["InputRut"]) and !empty($_POST["InputName"]) and !empty($_POST["InputLastName"]) and !empty($_POST["InputEmail"]) and !empty($_POST["InputPhoneNumber"]) and !empty($_POST["InputComments"])){
        $rut = $_POST["InputRut"];
        $name = $_POST["InputName"];
        $lastname = $_POST["InputLastName"];
        $email = $_POST["InputEmail"];
        $phonenumber = $_POST["InputPhoneNumber"];
        $comments = $_POST["InputComments"];

        $connection3 = Connection::get_instance()->get_connection();
        $sql = $connection3->query("INSERT INTO users
        (rut,name,lastname,email,phone,comments)VALUES('$rut',
        '$name','$lastname','$email','$phonenumber','$comments')");

        if ($sql == 1) {
            echo '<div class="alert alert-success">The user was correctly registered</div>';
        } else{
            echo '<div class="alert alert-danger">The user is not registred</div>';
        }
    }else{
        echo '<div class="alert alert-warning">Something was wrong, please complete all the fields</div>';
    } ?>

    <script> 
        history.replaceState(null,null,locattion.pathname);
    </script>

<?php } ?>       