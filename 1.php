<?php
$array = [1, 2, 3, 4, 5, 10, 1]; //   Создаем массив 
$array2 = [3, 4, 5, 6, 7, 10, 5, 8]; // 
$total = [];

for ($i = 0; $i < count($array) || $i < count($array2); $i++) {
    $total[] = $array[$i] * $array2[$i];
}

print_r($total);
