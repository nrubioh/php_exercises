<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Images CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center text-secondary p-3">IMAGES CRUD WITH PHP AND MYSQL</h1>

    <?php /* Connection */
        require "Models/connection.php";
        require "Controllers/uploadController.php";
        require "Controllers/editController.php";
        require "Controllers/deleteController.php";
        $sql = $connection->query("SELECT * FROM image");
    ?>

    <script>
        function errase() {
            let response=confirm("are you sure to delete the picture?");
            return response;
        }
    </script>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Upload Image
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New Image Record</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" enctype="multipart/form-data" method="POST">
                        <input type="file" class="form-control mb-2" name="btnImage">
                        <input type="submit" value="Save Image" name="btnSave" class="form-control btn btn-success">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="p-3 table responsive"> <!-- Table -->
        <table class="table table-hover table-striped">
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php while ($data = $sql->fetch_object()) { ?>
                    <tr>
                        <th scope="row"><?= $data->id ?></th>
                        <td>
                            <img width="80" src="<?= $data->photo ?>">
                        </td>
                        <td>
                            <a data-bs-toggle="modal" data-bs-target="#ModalEdit<?= $data->id ?>" class="btn btn-warning">Edit</a>
                            <a onclick="return errase()" href="index.php?id=<?= $data->id ?>&name=<?= $data->photo ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="ModalEdit<?= $data->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Photo</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" enctype="multipart/form-data" method="POST">
                                        <input type="hidden" value="<?= $data->id ?>" name="id_edit">
                                        <input type="hidden" value="<?= $data->photo ?>" name="name_edit">
                                        <input type="file" class="form-control mb-2" name="btnImage">
                                        <input type="submit" value="New changes" name="btnEdit" class="form-control btn btn-success">
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>