<?php
include "database/Connection.php";
$id = $_GET["id"];
$connection4 = Connection::get_instance()->get_connection();
$connection5=$connection4->query("SELECT * FROM `users` WHERE id=$id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify</title>
                                                <!-- CSS BOOT -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center">TitleEx</h1>
    <div class="container-fluid row">
                                            <!-- FORM -->
    <form class="col-4" method="POST">
        <h3 class="text-center text-secondary">Modify View</h3>
        <input type="hidden" name="InputId" value="<?= $id ?>">
        <?php 
        include "Controllers/updateController.php";
        while ($query=$connection5->fetch_object()) { 
        ?>
            <div class="mb-3">
                <label for="InputRut" class="form-label">RUT/DNI</label>
                <input type="text" class="form-control" placeholder="12345678k" name="InputRut" 
                value="<?=$query->rut?>" minlength="9" maxlength="9"/>
            </div>
            <div class="mb-3">
                <label for="InputName" class="form-label">First Name</label>
                <input type="text" class="form-control" name="InputName"
                value="<?=$query->name?>">
            </div>
            <div class="mb-3">
                <label for="InputLastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="InputLastName"
                value="<?=$query->lastname?>">
            </div>
            <div class="mb-3">
                <label for="InputEmail" class="form-label">e-mail</label>
                <input type="email" class="form-control" name="InputEmail"
                value="<?=$query->email?>">
            </div>
            <div class="mb-3">
                <label for="InputPhoneNumber" class="form-label">phoneNumber</label>
                <input type="text" class="form-control" name="InputPhoneNumber" 
                value="<?=$query->phone?>" minlength="9" maxlength="9"/>
                <div name="message" class="form-text">Cellphone number without +56</div>
            </div>
            <div class="mb-3">
                <label for="InputComments" class="form-label">Comments</label>
                <input type="text" class="form-control" name="InputComments"
                value="<?=$query->comments?>">
            </div>
        <?php 
        }
        ?>
        <button type="submit" class="btn btn-primary" name="btnUpdate" value="Ok">CHANGE VALUES</button>
    </form>
</body>
</html>
