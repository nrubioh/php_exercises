<?php

echo 'To write the single quote you must to write backSlash + singleQuote\'.<br>
And to write the backslash you must to write double backslah \\.<br><br>';

$firstName = 'nick';
$nick = 'PHP student';
    echo "My name is: $firstName <br>"; //first way to write all with doubleQuote
    echo 'My name is: '.$firstName. '<br><br>'; //second way.
    echo "In this moment I'm ${$firstName} and my name is $firstName <br><br>"; // $$

echo '<strong>ARRAY EXAMPLE</strong> <br>';
    $courses = [
        'backend' => [
            'PHP',
            'Laravel',
            'JS'
        ]
    ];
    echo "{$courses['backend'][1]}".'<br>';
    echo "{$courses['backend'][2]}".'<br><br>';

echo '<strong>CLASS EXAMPLE</strong> <br>';
    class User
    {
        public $name = 'Nick';
    }
    $user = new User;
    echo "$user->name want to know {$courses['backend'][0]} <br>";
    echo $user->name.' want to know '."{$courses['backend'][0]}<br><br>";

echo '<strong>FN EXAMPLE</strong> <br>';
    function getStudent(){
        return 'newStudent';
    };
    $newStudent = 'new PHP student';
    echo "I'm a ${getStudent()} <br><br>"; //I'm a new PHP student.

echo '<strong>EXTRACTION EXAMPLE</strong><br>';
    $longText = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quibusdam, facilis placeat obcaecati sed dolore ratione accusantium at distinctio tenetur, molestiae magni repellendus vitae dignissimos illum atque ad voluptatum hic Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur incidunt, ipsum vero laboriosam nobis quas tempora, iure qui repellat mollitia est odio doloremque. Ex, explicabo illo? Optio sed perferendis qui.';
    echo $longText[6].'<br>';  // i
    $extraction = substr($longText, 0, 300); //as return.
    echo "$extraction ... [click to see more]<br><br>"; //as a blog

echo '<strong>HOW TO CHANGE FROM STRING TO ARRAY (EXPLODE)</strong><br>';
    $data = 'javascript, php, laravel'; //items
    $tags = explode(', ', $data); // to change to array 
    echo "<pre>"; // pre command is to tidy the array.
    var_dump($tags);
    echo '<br><br>';

echo '<strong>HOW TO CHANGE FROM ARRAY TO STRING (IMPLODE)</strong><br>';
    $courses = ['javascript', 'php', 'laravel'];
    echo implode(', ', $courses);
    echo '<br><br>';

$trimTitle = '<strong>how to cut the code (trim)</strong><br>';
echo strtoupper($trimTitle); // to capslock mayus 
    $toCutExample = '   This is the example to cut in PHP       '; 
    // the code appear rendered because the PHP tool can clean the code.
    //the echo <pre> is still working (LINE 53)
    $toCutExample = trim($toCutExample);
    echo $toCutExample.'<br>'.'the text now appears fixed'.'<br><br>';

$lowerTitle = '<strong>HOW TO CHANGE THE UPPER WORDS TO LOWERS</strong><br>';
echo $lowerTitle; //to see the normal text
echo strtolower($lowerTitle).'just you\'d write \'strToLower($)\''; //to pass to lowerTitle
?>