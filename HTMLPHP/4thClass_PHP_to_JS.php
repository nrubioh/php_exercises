<?php
$usersPHP = array(
        array('id'=>'0','name' => 'akira'),
        array('id'=>'1','name' => 'eevee'),
        array('id'=>'2','name' => 'tolon'),
        array('id'=>'3','name' => 'titin'),
    );
$eeveeYearsPHP = 3; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to pass vars to JS </title>
</head>
<body>
    <script> 
        let usersJS = JSON.parse('<?= json_encode($usersPHP)?>');
        let eeveeYearsJS = <?= $eeveeYearsPHP ?>;
    </script>
    <!-- to link the JS to PHP -->
    <script src="./4thClass_JS.js"></script> 
</body>
</html>