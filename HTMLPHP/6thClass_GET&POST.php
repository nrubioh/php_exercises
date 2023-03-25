<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Method Form</title>
</head>
<body>
    <!--  which url am I gonna send the form? -->
    <form action="6thClass_server.php" method="get">
        <label for='inputName'>NAME_GET</label>
        <input type="text" name='inputName' id='idName'>

        <label for='inputAge'>AGE_GET</label>
        <input type="text" name='inputAge' id='idAge'>

        <button type="submit">Send form!</button>
    </form>

    <!--  POST METHOD -->
    <form action="6thClass_server.php" method="post">
        <label for='inputName2'>NAME_POST</label>
        <input type="text" name='inputName2' id='idName2'>

        <label for='inputAge'>AGE_POST</label>
        <input type="text" name='inputAge2' id='idAge2'>

        <button type="submit">Send form!</button>
    </form>

</body>
</html>