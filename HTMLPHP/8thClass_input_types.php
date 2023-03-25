<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="8thClass_server.php" method="POST" enctype="multipart/form-data">
        
        <!-- inputSimple -->
        <!-- id is to link label&input 
        the inputName allow to server identify the input -->
        <!-- <label for="labelName">PersonName</label>
            <input type="text" name="inputName" id="input1">-->

        <!-- inputArray -->
        <!-- <label>PersonArrayName</label>
            <input type="text" name="people[]">
            <input type="text" name="people[]">
            <input type="text" name="people[]">-->

        <!-- AssociativeInputsArray -->
        <!-- <label>NAME</label>
            <input type="text" name="people[name]">
        <label>EMAIL</label>
            <input type="email" name="people[e-mail]">
        <label>NUMBER</label>
            <input type="number" name="people[phone]">-->

        <!-- checkBox -->
        <!-- <input type="checkbox" name="list1">
        <input type="checkbox" name="list2" value="this value it`s clicked">
        <input type="checkbox" name="list3">-->

        <!-- radioButton -->
        <!-- <label for="aus">Australia</label>
            <input type="radio" name="country" value="_Australia" id=1>
        <label for="eng">England</label>
            <input type="radio" name="country" value="_England" id=2>
        <label for="usa">USA</label>
            <input type="radio" name="country" value="_USA" id=3> -->

        <!-- multiplesFiles -->
        <label for="gallery">Upload your files</label>
            <input type="file" multiple name="inputFiles[]" id="4">
        <button type="submit">Send Form</button>
    </form>
</body>
</html>