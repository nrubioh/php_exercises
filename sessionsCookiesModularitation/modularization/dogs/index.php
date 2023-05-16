<?php
require ("Logic/CreatePuppy.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modularization</title>
</head>
<body>
    <ul>
        <li><?= $eevee->getName() ?> screams: <?= $eevee->sayWoof() ?></li>
        <li><?= $colita->getName() ?> screams: <?= $colita->sayWoof() ?></li>
        <li><?= $matilda->getName() ?> screams: <?= $matilda->sayWoof() ?></li>
    </ul>
    <ul>
        <li><?= $eeveeOwner->getName() ?> was adopted by: <?= $eeveeOwner->getAdopted_by() ?></li>
        <li><?= $colitaOwner->getName() ?> was adopted by: <?= $colitaOwner->getAdopted_by() ?></li>
        <li><?= $matilda->getName() ?> was adopted by: <?= $matildaOwner->getAdopted_by() ?></li>
    </ul>
</body>
</html>