<?php

//function functionName(int $a = null) {
//    return(50 + $a);
//}
//echo functionName(5);
//-------------------------------------
//function functionName($a, $b) {
//    return(50 + $a - $b);
//}
//echo functionName(5, 20);
//-----------------------------------------
//function functionName($a, $b):int {
//    return true;
//}
//echo functionName(5, 20);
//-------------------------------------
//function functionName($a, $b) {
//    $c = 50 + $a - $b;
//    return $c;
//}
//$funcName = 'functionName';
//echo $funcName(50, 20);
//--------------------------------------

funcname('Мир');
$greet = function($name)
{
    printf("Привет, %s\r\n", $name);
};

$greet('Мир');

function funcname($test)
{
    printf("Привет, %s\r\n", $test);
};




