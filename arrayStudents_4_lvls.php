<?php
$students = [
    'student0:'=>[
        'name'=>'Akira', 
        'job' => 'scort', 
        'years' => 8,
        'food' => [
            'likes' => [
                'Tuna',
                'Meat'
                ], 
            'no likes' => 'Lettuce'
            ]
    ],
    'student1:'=>[
        'name'=>'Tolon', 
        'job' => 'Musical', 
        'years' => 11, 
        'food' => [
            'likes' => 'Yogurth',
            'no likes' => 'Menta'
            ]
    ],
    'student2:'=>[
        'name'=>'Titin', 
        'job' => 'Cheff', 
        'years' => 11, 
        'food' => [
            'likes' => 'Yogurth',
            'no likes' => 'nothing'
            ]
    ],
    'student3:'=>[
        'name'=> [
            'Eevee', 
            'Eevania of Rumania'
            ], 
        'job' => 'Football Player', 
        'years' => 6, 
        'food' => [
            'likes' => 'Tomate',
            'no likes' => 'Meat (allergic)'
            ]
    ]
];
echo "\n";
/* in this case the array is not complete defined with a 'name',
for that reason you should use numbers [].*/
$eevee = $students['student3:'];
echo "1. The "."{$eevee['name'][0]}"."`s nickname is: ". "{$eevee['name'][1]}"
."\n\n";
//answer = 1. The Eevee`s nickname is: Eevania of Rumania
//$eevee to enter in the array + TAGname to access names + number.

$titin = $students['student2:'];
echo '2. The food that '."{$titin['name']}".' doesn`t like is: '.
"{$titin['food']['no likes']}"
."\n\n"; 
//answer = 2. The food that Titin doesn`t like is: nothing

$akira = $students['student0:'];
echo '3. '."{$akira['name']}".'`s favorite food is: '."{$akira['food']['likes'][0]}"
."\n\n"; 
//answer = 3. Akira`s favorite food is: Tuna




