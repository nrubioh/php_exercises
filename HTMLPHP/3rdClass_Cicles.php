<?php
$users = array('akira','eevee','tolon','titin');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cicles</title>
</head>
<body>
    <ul>
        <h2>For Cicle</h2>
            <?php for($x = 1; $x < 11; $x++): ?>
            <li><?= $x ?></li>
            <?php endfor;?>
        <h2>While Cicle</h2>
            <?php while(false):?>
                <b><li>Esta es una prueba</li></b>
            <?php endwhile;?>    
    </ul>
    <ul>
        <h2>ForEach Cicle</h2>
            <?php foreach ($users as $arrayInHTML): ?>
                <li><?= $arrayInHTML ?></li>
            <?php endforeach;?>
    </ul>
</body>
</html>