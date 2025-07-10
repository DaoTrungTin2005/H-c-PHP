<?php

//Nhúng các hàm hỗ trợ giao diện như get_header() và get_footer() từ file template.php 
require 'lib/template.php';
require 'db/connect.php'



?>

<?php

// Lấy giá trị mod và act từ URL để xác định module (chức năng) và hành động (trang cụ thể) cần chạy.
// Nếu không có mod hoặc act, nó sẽ mặc định về 'home' và 'main'.


// ?mod=product&act=main → load modules/product/main.php
// ?mod=page&act=detail&id=1 → load modules/page/detail.php
$mod = !empty($_GET['mod']) ? $_GET['mod'] : 'home';
$act = !empty($_GET['act']) ? $_GET['act'] : 'main';

    get_header();





// Tạo ra đường dẫn tới file PHP cần load dựa theo module và action.
$path = "modules/{$mod}/{$act}.php";
echo "in cái path: " . $path . "........";


if (file_exists($path)) {
    require $path;
} else {
    require 'inc/404.php';
}
?>

<?php
// Hiển thị footer nếu không phải trang login

    get_footer();

?>