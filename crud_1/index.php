<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
                                            <!-- CSS BOOT -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <script>
        function deleteRecord() {
            var alert = confirm("Would you like to delete the record?");
            return alert;
        }
    </script>

    <h1 class="text-center">TitleEx</h1>
    <div class="container-fluid row">
                                            <!-- FORM -->
        <form class="col-4" method="POST">
            <h3 class="text-center text-secondary">People Registre</h3>
            <?php 
            include "database/Connection.php";
            include "Controllers/userController.php";
            ?>
            <div class="mb-3">
                <label for="InputRut" class="form-label">RUT/DNI</label>
                <input type="text" class="form-control" placeholder="12345678k" name="InputRut" minlength="9" maxlength="9"/>
            </div>
            <div class="mb-3">
                <label for="InputName" class="form-label">First Name</label>
                <input type="text" class="form-control" name="InputName">
            </div>
            <div class="mb-3">
                <label for="InputLastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="InputLastName">
            </div>
            <div class="mb-3">
                <label for="InputEmail" class="form-label">e-mail</label>
                <input type="email" class="form-control" name="InputEmail">
            </div>
            <div class="mb-3">
                <label for="InputPhoneNumber" class="form-label">phoneNumber</label>
                <input type="text" class="form-control" name="InputPhoneNumber" minlength="9" maxlength="9"/>
                <div name="message" class="form-text">Cellphone number without +56</div>
            </div>
            <div class="mb-3">
                <label for="InputComments" class="form-label">Comments</label>
                <input type="text" class="form-control" name="InputComments">
            </div>
            <button type="submit" class="btn btn-primary" name="btnCreate" value="Ok">CREATE</button>
        </form>
                                            <!-- TABLE -->
        <table class="table col-8">
        <?php
        include_once "database/Connection.php";
        include "Controllers/deleteController.php";
        $connection1 = Connection::get_instance()->get_connection();
        ?>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">RUT/DNI</th>
                    <th scope="col">NAME</th>
                    <th scope="col">LASTNAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">PHONE</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $connection2 = $connection1->query("SELECT * FROM users");
                while ($data = $connection2->fetch_object()){ 
                ?>
                    <tr>
                        <th scope="row"><?php echo $data->id ?></th>
                        <td><?php echo $data->rut ?></td>
                        <td><?php echo $data->name ?></td>
                        <td><?php echo $data->lastname ?></td>
                        <td><?php echo $data->email ?></td>
                        <td><?php echo $data->phone ?></td>
                        <td>
                            <a type="button" class="btn btn-outline-warning" href="modifyView.php?id=<?= $data->id?>">EDIT</a>
                            <a onclick="return deleteRecord()" type="button" class="btn btn-outline-danger" href="index.php?id=<?= $data->id?>">DELETE</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
                                            <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>




