<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="7thClass_server.php" method="post" enctype="multipart/form-data">
        <label for="name">NAME</label>
        <input type="text" name="name" id="name">

        <label for="image">IMAGE</label>
        <input type="file" name="imageName" id="image">
        <button type="submit">to sent image</button>
    </form>
</body>
</html>