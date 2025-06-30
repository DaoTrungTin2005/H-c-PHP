<?php 
$x = 4 ;
$y = 5;

if ($x > 5 || $y < 6){
    echo "ok";
}

if (!($x > 5)){
    echo "heheheh" ;
}

function checkEven($x){
    if ($x % 2 == 0)
        return True; // nếu là số chẳn trả về true
    return false;
}

//hàm checkEven(5) sẽ trả về giá trị false.

// Toán tử ! là toán tử "NOT" (phủ định). Nó đảo ngược giá trị boolean.
// !false sẽ trở thành true. (cho về true vì true thì if mới thực thi)
if (!checkEven(5))
    echo "Số lẻ"
?>