<?php /*
$arr = [];
$arr2 = array();

var_dump($arr);
var_dump($arr2);
 --------------------------------
 $arr = 1;
$arr2 = [1];

var_dump($arr);
var_dump($arr2);
 ------------------------------------
$arr[] = 1;
$arr[] = 1;

var_dump($arr);
 -------------------------------------
 $arr[] = 1;
$arr[] = 1;
$arr[] = [2, 3];

var_dump($arr);
 -------------------------------------------
 $arr[] = 1;
$arr[] = 1;
$arr[] = [2, 3];
$arr['four'] = 4;

$arr2 = [
'one' => 1,
 'two' => 2,
 'three' => 3,
];

var_dump($arr);
var_dump($arr2);
------------------------------------------
 $arr[] = 1;
$arr['test'] = 1;
$arr[] = [2, 3];
$arr['four'] = 4;
$arr[] = [
'one' => 1,
 'two' => 2,
 'three' => 3,
];


foreach ($arr as $key => $value) {
    echo var_dump($value);
}
 ----------------------------------------------
 $arr = [];

for ($i = 5; $i < 14; $i++) {
    $arr['key ' . $i] = $i;
}

var_dump($arr);
 ------------------------------------
$arr = [];

for ($i = 5; $i < 14; $i++) {
    $arr['key ' . $i] = $i;
}

echo array_sum($arr);
 -------------------------------
 $arr = [];

for ($i = 5; $i < 14; $i++) {
    $arr['key ' . $i] = $i;
}

echo count($arr);
 -------------------------------------------
 https://www.php.net/manual/ru/array.sorting.php
-----------------------------------------------
 $arr = [1, 5, 76, 22, 10, 6];
$arr['test'] = [55, 22, 48];
$arr['test2'] = 66;
$arr[] = 192;
$arr2 = array_keys($arr);
echo '<pre>';
var_dump($arr2);
echo '</pre>';
 ---------------------------------------------
*/
$arr = [1, 1, 1, 1, [1, 1], 1];

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
echo '<pre>';
    var_dump(sumFlatArr($arr));
echo '</pre>';

