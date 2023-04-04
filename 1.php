<?php
$array = [1, 2, 3, 4, 5, 10, 1]; //   Создаем массив 
$array2 = [3, 4, 5, 6, 7, 10, 5, 8]; // 
$total = [];

for ($i = 0; $i < count($array) || $i < count($array2); $i++) {
    $total[] = $array[$i] * $array2[$i];
}

print_r($total);


/*$wish = ['счастье', 'здоровье', 'богадства' , 'любьви']; 
$adjectives = [' бесконечного' , ' великого' , 'обширного' , 'бесконечного']; 
$random_card = []; 
$user_name = readline("Напишите имя.");
$count = 3; 

for ($i = 0; $i < $count; $i++) {
    $randWishes = array_rand($wish);
    $randAdjectives = array_rand($adjectives);

    $random_card[] =  $adjectives[$randAdjectives]. '  ' . $wish[$randWishes];
}

$last = "и" . array_pop($random_card); 

$text = implode(", " , $random_card ). $last ;
echo " $user_name,   от всего сердца поздравляю вас  с Днем вылупления , желаю $text.";*/


$student_list  = [
    'ПД-1' => [
        'Николай' => 5, 
        'Дима' => 4,
        'Соня' => 3,
        'Фомин' => 4

    ],

    'Пд-2' => [
        'Яков' => 4,
         'Иван' => 3,
         'Данил' => 4, 
         'Виктория' => 5
    ]
    ];
$terminate  = []; 
$averGrade =[]; 

foreach ($student_list as $group =>$groups) {
    $averGrade[$group] = array_sum($groups) / count($groups);
    foreach ($groups as $studentName => $grade) {
        if ($grade < 3) { 
            $terminate[$group] [] = $studentName;
        }
    }
}
$topGroup = array_keys($averGrade, max($averGrade))[0];
echo " Топ группа : \n $topGroup = $averGrade[$topGroup]";
