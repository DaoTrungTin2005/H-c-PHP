<?php

//Nhúng các hàm hỗ trợ giao diện như get_header() và get_footer() từ file template.php 
require 'lib/template.php';

//Bắt đầu phiên làm việc với $_SESSION. Không có dòng này thì $_SESSION sẽ không hoạt động.
session_start();

// PHP không gửi dữ liệu ra trình duyệt ngay mà lưu lại tạm thời trong bộ nhớ.
//Hoặc dùng ob_start() đầu file để tránh lỗi ngớ ngẩn
ob_start();

?>

<?php


// Nếu trên URL có ?page=something, thì lấy something
// Còn không thì mặc định là home (tức là nếu không có gì thì sẽ đẩy về trang home đầu tiên)

// 👉 Ví dụ:
// index.php?page=about → $page = "about"
// index.php → $page = "home"
$page = !empty($_GET['page']) ? $_GET['page'] : 'home';

//Nếu không phải trang login thì hiển thị header
if ($page != 'login') {
    get_header();
}

//Kiểm tra đăng nhập (session & cookie)

// Nếu chưa đăng nhập ($_SESSION['is_login'] không có):
// Nếu cookie is_login có, thì tự động khôi phục lại session (giống như auto-login).
// Nếu không có cookie, và không phải đang vào trang login hay logout, thì bị chuyển hướng về trang login.
if (!isset($_SESSION['is_login'])) {
    if (isset($_COOKIE['is_login']) && $_COOKIE['is_login']) {
        $_SESSION['is_login'] = true;
        $_SESSION['user_login'] = $_COOKIE['user_login'];

        //❌ Nếu không có session và không có cookie, và bạn không đang truy cập login hoặc logout:
        // ➤ thì tự động bị chuyển hướng về trang ?page=login.
        // Do có dòng này nên nếu đăng xuất ra rồi mà vào bất kì trang nào khác thì sẽ bị chuyển hướng về trang login. 
    } elseif (!in_array($page, ['login', 'logout'])) {
        header("Location: ?page=login");
        exit();
    }
}

// In thử session và cookie ra cho kiểm tra
if (isset($_SESSION['is_login'])) {

    echo "session nè : " . $_SESSION['user_login'];
    echo '<br>';
}

if (isset($_COOKIE['is_login'])) {
    echo "   cookie nèiii: " . $_COOKIE['user_login'];
    echo '<br>';
}




echo "Lấy cái page trên URL: " . $page;
echo '<br>';

// Ý nghĩa: Tạo đường dẫn tới file PHP cần tải, ví dụ:

// home → pages/home.php
// product → pages/product.php
$path = "pages/{$page}.php";
echo "in cái path: " . $path . "........";

// Nếu file tồn tại → nhúng vào để hiển thị.
// Nếu không có → hiện trang lỗi 404.
if (file_exists($path)) {
    require $path;
} else {
    require 'inc/404.php';
}
?>

<?php
// Hiển thị footer nếu không phải trang login
if ($page != 'login') {
    get_footer();
}
?>