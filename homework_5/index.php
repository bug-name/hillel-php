<?php
//Создать функцию определяющую какой тип данных ей передан и выводящей
//соответствующее сообщение.
function checkType ($variable) {
    return gettype($variable);
}
echo checkType('test'); //string
echo checkType(111); //integer

//Создать функцию которая считает все буквы b в переданной строке,
//в случае если передается не строка функция должна возвращать false
$string = 'I must explain to you how all this 
mistaken idea of denouncing pleasure and praising pain was born and 
I will give you the master-builder of human happiness.';
$notString = 1;
function countB($data) {
    if (checkType($data) === 'string') {
        $strSplitted = str_split($data);
        $result = 0;
        foreach ($strSplitted as $key => $value) {
            if ($value === 'b') {
                $result++;
            }
        }
        return $result;
    } else {
        return false;
    }
}
echo countB($string); //2
var_export(countB($notString)); //false

//Создать функцию которая считает сумму значений всех элементов
//массива произвольной глубины
$arr = [1, [1, 1, 1, [1, 1]], 1, 1];
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
var_export(sumFlatArr($arr)); // 8

//Создать функцию которая определит
//сколько квадратов меньшего размера можно
//вписать в квадрат большего размера размер возвращать в float
$square1 = 2;
$square2 = 2;
function squaresPlacement($square1, $square2) {
    $size1 = pow($square1, 2);
    $size2 = pow($square2, 2);
    if ($size1 > $size2) {
        return $size1 / $size2;
    } else {
        return $size2 / $size1;
    }

}
echo squaresPlacement($square1, $square2); //2.25
