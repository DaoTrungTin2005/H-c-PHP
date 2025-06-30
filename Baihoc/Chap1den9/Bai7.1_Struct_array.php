<?php
#tạo mảng rỗng
$error = array();

#Thê giá trị cho mảng rỗng
$error['username'] = "Bạn không dc để trống tên đn";

#Tạo mảng vs key mặc định
$list_odd = array(1, 3, 5);

#Tạo mảng vs key xác định
$info = array('id' => 1, 'fullname' => 'Tín', 'email' => 'a@');

echo "<pre>";
print_r($error);
echo "<pre>";

echo "<pre>";
print_r($list_odd);
echo "<pre>";

echo "<pre>";
print_r($info);
echo "<pre>";