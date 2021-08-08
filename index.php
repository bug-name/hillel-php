<?php

require_once 'vendor/autoload.php';

$appleObj = new \App\Apple('red');
$secondObj = new \App\SecondClass();
echo $appleObj->color;
echo $secondObj->param1;





