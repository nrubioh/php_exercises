<?php 
if (!empty($_POST["btnSave"])) {
    $image = $_FILES["btnImage"]["tmp_name"];
    $imageName = $_FILES["btnImage"]["name"];
    $imageType = strtolower(pathinfo($imageName,PATHINFO_EXTENSION));
    $imageSize = $_FILES["btnImage"]["size"];

    $route = "files/";

    if ($imageType=="jpg" || $imageType=="jpeg" || $imageType=="png"){

        $photo_record=$connection->query("INSERT INTO image(photo) VALUES('')");
        $id_record=$connection->insert_id;

        $fullRoute = $route.$id_record.".".$imageType;
        $update_photo=$connection->query("UPDATE image SET photo='$fullRoute' WHERE id=$id_record");

        //image Storing
        if (move_uploaded_file($image,$fullRoute)) {
            echo "<div class='alert alert-success'>Image succefully save</div>";
        } else {
            echo "<div class='alert alert-danger'>Error saving the photo</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>that format is not correct</div>";
    } ?>

<script>
    history.replaceState(null,null,location.pathname);
</script>

<?php } ?>
