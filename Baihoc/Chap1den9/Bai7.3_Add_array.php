<?php
#tạo mảng rỗng
$error = array();

#Thêm giá trị cho mảng rỗng
$error['username'] = "Bạn không dc để trống tên đn";

//=========================================================
#Tạo mảng vs key mặc định
$list_odd = array(1, 3, 5);
$list_prime = array(2,3,5,7);

#(thêm phàn tử vs key mặc định)
$list_prime[] = 11;


//=============================================================
#Tạo mảng vs key xác định
$info = array('id' => 1, 'fullname' => 'Tín', 'email' => 'a@');

#Lưu trữ thêm sđt (thêm phàn tử vs key xác định)
$info['phone'] = '09023232242';

echo "<pre>";
print_r($error);
echo "<pre>";

echo "<pre>";
print_r($list_odd);
echo "<pre>";

echo "<pre>";
print_r($list_prime);
echo "<pre>";

echo "<pre>";
print_r($info);
echo "<pre>";