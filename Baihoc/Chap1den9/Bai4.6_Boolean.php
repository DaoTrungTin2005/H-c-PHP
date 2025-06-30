<?php // <--- PHẢI CÓ DÒNG NÀY
$a = 10;
if ($a % 2 == 0){
    echo "{$a} là số chẵn";
}

function checkEven($n){
    if ($n % 2 == 0){
    echo "{$n} là số chẵn";
  
}
else{
    echo "{$n} là số lẻ";
  
}
}


$check = checkEven(4);
echo $check;

?>