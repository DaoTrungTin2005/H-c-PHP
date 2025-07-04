<?php

// Xóa cookie nếu người dùng đã chọn "Ghi nhớ đăng nhập"
setcookie('is_login', true, time() - 3600);
setcookie('user_login', $data['username'], time() - 3600);

//Xóa session (đăng xuất khỏi phiên hiện tại)
unset($_SESSION['is_login']);
unset($_SESSION['user_login']);

//Chuyển hướng người dùng về trang login
header("location: ?page=login");
?>