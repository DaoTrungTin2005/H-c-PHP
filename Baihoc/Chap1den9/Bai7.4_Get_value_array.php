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

#Lây giá trị ở phần tử thứ 0
echo $list_prime[0] ;


//=============================================================
#Tạo mảng vs key xác định
$info = array('id' => 1, 'fullname' => 'Tín', 'email' => 'a@');

#Lưu trữ thêm sđt (thêm phàn tử vs key xác định)
$info['phone'] = '09023232242';

#Lấy cái giá trị của id, fullname, email sau đó truyền qua html
$id = $info['id'];
$fullname = $info['fullname'];
$email = $info['email'];
echo $fullname;

//=============================================================

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
echo "<pre>"; ?>

//========================================================
<html>

<head></head>
<title>Test</title>

</html>

<body>
    <p>Id:<?php echo $id ?></p>
    <p>Họ và tên: <?php echo $fullname ?></p>
    <p>Email: <?php echo $email ?></p>
    <p>SDT:<?php echo $info['phone'] ?></p>
</body>