<?php

function sum($a, $b){
    return $a + $b;
}

echo $t = sum(3, 10);
echo ".....";

$t = $t + 100000;
echo $t;
echo ".....";

//=================================
$a = 20;
$b = 30;
function sum2(){
    global $a, $b ;
    return $a + $b;
}

echo sum2();
echo ".....";

//=================================
$c = 100;
$d = 1;
function sum3(){
    return $GLOBALS['c'] + $GLOBALS['d'];
}

echo sum3();
echo ".....";
?>