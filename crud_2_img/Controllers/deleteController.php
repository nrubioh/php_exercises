<?php
if (!empty($_GET["id"]) && !empty($_GET["name"])) {
    $id = $_GET["id"];
    $name = $_GET["name"];

    try {
        unlink($name);
    } catch (\Throwable $th) {
        //throw $th;
    }

    $delete = $connection->query("DELETE FROM image WHERE id = $id");

    if ($delete==1) {
        echo "<div class='alert alert-success'> The picture was deleted correctly.</div>";
    } else {
        echo "<div class='alert alert-danger'> Error deleting the picture in the DDBB.</div>";
    }?>

    <script>
        history.replaceState(null,null,location.pathname);
    </script>
<?php
}
?>