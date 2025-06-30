<?php
// $n = 10 ;
// $s = 0 ;
// for ($i = 2 ; $i <= $n  ; $i++){
//     if ($i % 2 == 0){
//         $s = $s + $i ;
//     }
// }
// echo "kq {$s}"


// $n = 12 ; 
// $s = 0 ;
// for ($i = 3 ; $i<= $n; $i = $i + 3){
//     $s = $s + 1/$i ;
// }

// echo "kq {$s}"



// $n = 10;
// $s = 0;
// for ($i = 1 ; $i <= $n ; $i ++){
//     $s = $s +  $i/($i + 1) ;
// }

// echo "kq {$s}"
$a = 2;
$b = 1;
$c = -1;

if ($a != 0){
    $delta = $b * $b - 4 * $a * $c ;
    if ($delta < 0)
        echo "vo nghiem";
    elseif ($delta == 0){
        $x = -$b / (2 *$a) ;
        echo "Nghiem kep: x = {$x}"; }
    else {
        $x1 = (- $b + sqrt($delta))/ (2 * $a);
        $x2 = (- $b - sqrt($delta))/ (2 * $a);
        echo "2 nghiem : x1 = {$x1} va x2 = {$x2}" ;
    }
}
else 
    echo "Đây không phải pt bậc 2"

?>