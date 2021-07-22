<?php
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

//посчитать длину массива
$arrLength = count($arr); //9

//переместить первые 4 элемента массива в конец массива
for ($i = 0; $i < 4; $i++) {
    $arrElem = array_shift($arr);
    $arr[] = $arrElem;
}
var_export($arr); //array ( 0 => 31, 1 => 4, 2 => 1, 3 => 8, 4 => 6, 5 => 1, 6 => 2, 7 => 3, 8 => 7, )

//получить сумму 4,5,6 элемента
$arrSum = 0;
for ($i = 3; $i < 6; $i++) {
    $arrSum += $arr[$i];
}
echo $arrSum; // 15


$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 5,
    'five' => 12,
];

$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'four' => 5,
    'five' => 13,
    'six' => 37,
];

//найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
var_export(array_diff_assoc($secondArr, $firstArr)); //array ( 'seven' => 22, 'three' => 32, 'five' => 13, 'six' => 37, )

//найти все элементы которые присутствую в первом и отсутствуют во втором
var_export(array_diff_assoc($firstArr, $secondArr)); //array ( 'two' => 2, 'three' => 3, 'five' => 12, )

//найти все элементы значения которых совпадают
var_export(array_intersect_assoc($firstArr, $secondArr)); //array ( 'one' => 1, 'four' => 5, )

//найти все элементы значения которых отличается
function searchArrDifKeys ($arr1, $arr2) {
    $result = [];
    foreach ($arr1 as $key => $value) {
        foreach ($arr2 as $key2 => $value2) {
            if ($key === $key2) {
                if ($value !== $value2) {
                    $result[$key] = $value;
                    $result[$key2 . '_pare'] = $value2;
                }
            }
        }
    }
    return $result;
}
var_export(searchArrDifKeys ($firstArr, $secondArr)); // С ОДИНАКОВЫМИ КЛЮЧАМИ array ( 'three' => 3, 'three_pare' => 32, 'five' => 12, 'five_pare' => 13, )
function searchArrDif ($arr1, $arr2) {
    $result = [];
    $arrDifs1 = array_diff_assoc($arr1, $arr2);
    $arrDifs2 = array_diff_assoc($arr2, $arr1);
    foreach ($arrDifs1 as $key => $value) {
        $result[] = $value;
    }
    foreach ($arrDifs2 as $key => $value) {
        $result[] = $value;
    }
    return $result;
}
var_export(searchArrDif ($firstArr, $secondArr)); // array ( 0 => 2, 1 => 3, 2 => 12, 3 => 22, 4 => 32, 5 => 13, 6 => 37, )

$firstArr = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'four' => 5,
    'five' => [
        'three' => 32,
        'four' => 5,
        'five' => 12,
    ],
];

//получить все вторые элементы вложенных массивов
function arrNestedSecond($arr) {
    $result = [];
    foreach ($arr as $key => $value) {
        if (is_array($value)){
            $result[] = array_values($value)[1];
        }
    }
    return $result;
}
var_export(arrNestedSecond($firstArr)); array ( 0 => 22, 1 => 2, 2 => 5, );

//получить общее количество элементов в массиве
function countFlatArr($arr) {
    $sum = 0;
    foreach ($arr as $key => $value) {
        if (is_array($value)){
            $sum += count($value);
        } else {
            $sum += 1;
        }
    }
    return $sum;
}
var_export(countFlatArr($firstArr)); // 10

//получить сумму всех значений в массиве
function sumFlatArr($arr) {
    $sum = 0;
    foreach ($arr as $key => $value) {
        if (is_array($value)){
            $sum += sumFlatArr($value);
        } else {
            $sum += $value;
        }
    }
    return $sum;
}
var_export(sumFlatArr($firstArr)); // 113
