<?php
if (!empty($_POST["btnEdit"])) {
    $id = $_POST["id_edit"];
    $name = $_POST["name_edit"];
    /* PICTURE`S DATA */
    $image = $_FILES["btnImage"]["tmp_name"];
    $imageName = $_FILES["btnImage"]["name"];
    $imageType = strtolower(pathinfo($imageName,PATHINFO_EXTENSION));
    /* PATH */
    $files = "files/";
    $route = $files.$id.".".$imageType;

    if (is_file($image)) {
        if ($imageType == "jpg" || $imageType == "jpeg" || $imageType == "png") {
            echo "<div class='alert alert-success'>Changes were successfully done</div>";
            
            /* To delete the old picture. */
            try {
                unlink($name);
            } catch (\Throwable $th) {
                //throw $th;
            }

            //to save the new picture.
            if (move_uploaded_file($image, $route)) {
                $edit = $connection->query("UPDATE image SET photo='$route' WHERE id=$id");

                if ($edit == 1) {
                    echo "<div class='alert alert-success'> The picture was uploading correctly.</div>";
                } else {
                    echo "<div class='alert alert-danger'> Error editinng picture.</div>";
                }

            } else {
                echo "<div class='alert alert-danger'> Error uploading the picture to DDBB.</div>";
            }
        } else {
            echo "<div class='alert alert-danger'> Only JPG, PNG, and JPEG files are accepted.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>you must to select an image</div>";
    } ?>
<script>
    history.replaceState(null,null,location.pathname);
</script>
<?php 
} ?>