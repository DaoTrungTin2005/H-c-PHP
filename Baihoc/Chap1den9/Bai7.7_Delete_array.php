<?php 
// Xóa mảng đa chiểu
$listUser = array(
    1 => array('id' => 1, 'fullName' => 'Tín', 'age' => 30),
    2 => array('id' => 20, 'fullName' => 'Thuận', 'age' => 35),
);

// Xóa
// Xóa tuổi thôi
unset($listUser[2]['age']);
// Xóa nguyên cụm
unset($listUser[1]);


echo "<pre>";
print_r($listUser);
echo "<pre>";
//============================================================
// Xóa mảng 1 chiểu
$info = array('id' => 100, 'fullName' => 'Tín', 'age' => 30);
unset($info['age']);
echo "<pre>";
print_r($info);
echo "<pre>";
?>