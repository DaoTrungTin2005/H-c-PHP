<?php
// function check_even($n){
//     if ($n % 2 ==0){
//         echo "{$n} là số chẵn";
//     }
// }

// check_even(6);

// function sum($a, $b){
//     $t = $a + $b;
//     echo $t;
// }

// sum(5,10);
// echo "lll"
//=========================================================
function sum_multi_number()
{
    // nó ra số lượng của tham số truyền vào
    echo func_num_args();
    // echo func_get_args(0);
    // echo func_get_args(1);
    echo "..";

    //Truyền vào index nó ra giá trị
    $a = func_get_arg(0);
    $b = func_get_arg(1);

    echo "{$a}...{$b}";

    echo "..";
    //In ra cái mảng  
    $list_args = func_get_args();
    showArray($list_args);

    echo "..";

    // Tính tổng mấy thằng bên trong
    $t = 0;
    foreach ($list_args as $value) {
        $t += $value;
    }

    echo $t;
}

function showArray($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

sum_multi_number(2, 5, 10, 2, 1000);

//=========================================================
    echo "..";
function sum_multi_number2($list_number = array()){
    if (is_array($list_number)){
        $t = 0 ;
        foreach($list_number as $value){
            $t += $value;
        }
    }
    echo $t ;
}

$list_number = array(2,4,6);
sum_multi_number2($list_number);

//============================================================

//Tạo ra cai form từ 1 hàm(chỉ cần truyền tham số vào là ra cái form cũng những thuộc tính vs tham số truyền vào)

function create_input_text($name, $value, $option = array()){
    // Lấy giá trị theo index truyền vào
    $name = func_get_arg(0);
    $value = func_get_arg(1);
    $option = func_get_arg(2) ;
    
    if(!empty($option)){
        $id = $option['id'];
        $class = $option['class'];
    }


$html = "<input type='text' name = '{$name}' value = '{$value}' id = '{$id}' class='{$class}' />";
echo $html;

}

create_input_text('username', 1000, $option= array('id' => 'hehehehe', 'class' => 'hhhahahaha'))



?>