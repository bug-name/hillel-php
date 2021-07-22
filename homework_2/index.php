<?php
echo 'Получить остаток деления 7 на 3. </br>';
echo 'Результат: ' . 7 % 3 . '</br></br>'; // 1

echo 'Получить целую часть сложения 7 и 7,15. </br>';
echo 'Результат: ' . round(7 + 7.15) . '</br></br>'; // 14

echo 'Получить корень из 25 </br>';
echo 'Результат: ' . sqrt(25) . '</br></br>'; // 5

echo 'Получить 4-е слово из фразы - Десять негритят пошли купаться в море </br>';
$str = 'Десять негритят пошли купаться в море';
$strArrWords = explode(' ', $str);
echo 'Результат: ' . $strArrWords[3] . '</br></br>';

echo 'Получить 17-й символ из фразы - Десять негритят пошли купаться в море </br>';
echo 'Результат: ' . mb_substr($str, 16, 1) . '</br></br>';

echo 'Сделать заглавной первую букву во всех словах фразы - Десять негритят пошли купаться в море </br>';
$str = 'Десять негритят пошли купаться в море';
//Сделать заглавной первую букву во всех словах фразы - Десять негритят пошли купаться в море
$str = 'Десять негритят пошли купаться в море';
echo mb_convert_case($str, MB_CASE_TITLE, 'UTF-8');

echo 'Посчитать длину строки - Десять негритят пошли купаться в море </br>';
echo 'Результат: ' . mb_strlen($str) . '</br></br>'; //37

echo 'Правильно ли утверждение true равно 1 </br>';
var_export(true == 1); //правильно
echo '</br></br>';

echo 'Правильно ли утверждение false тождественно 0 </br>';
var_export(false === 0); //неправильно
echo '</br></br>';

echo 'Какая строка длиннее three - три </br>';
echo mb_strlen('three'); //5
echo '</br>';
echo mb_strlen('три'); //3
echo '</br>';
echo 'Перая строка длиннее </br></br>';

echo 'Какое число больше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2 </br>';
var_export(125 * 13 + 7); //1632
echo '</br>';
var_export(223 + 28 * 2); //279
echo 'Первое число больше </br></br>';
