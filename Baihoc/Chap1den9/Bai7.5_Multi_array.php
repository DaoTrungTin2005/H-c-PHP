<?php // <--- PHẢI CÓ DÒNG NÀY


#Mảng nhiều chiều
#MẢNG DS THÀNH VIÊN
$listUser = array(
    1 => array('id' => 1, 'fullName' => 'Tín', 'age' => 30),
    2 => array('id' => 2, 'fullName' => 'Thuận', 'age' => 35),
);
echo "<pre>";
print_r($listUser);
echo "<pre>";

//===============================

#Thêm 1 mảng thứ 3 vào mảng đa chiều

// Cách 1 
$listUser[3] = array(
    'id' => 3 ,
    'fullName' => 'Dat',
    'age' => 18,
);

// Cách 2 
$listUser[4] ['id'] = '4';
$listUser[4] ['fullName'] = 'Linh';
$listUser[4] ['age'] = '4';

//===============================
//Lấy giá trị của mảng có thứ tự là 3 
$info = $listUser[3];

echo "<pre>";
print_r($info);
echo "<pre>";

// Lấy giá trị id của thằng info (thằng info là giá trị của mảng có thứ tự là 3 ở mảng đa chieu)
#Cách 1
echo $info['id'];
#Cách 2
echo $listUser[3]['id'];
//===============================
echo "<pre>";
print_r($listUser);
echo "<pre>";
?> //