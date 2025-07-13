<?php

/*
 * ---------------------------------------------------------
 * BASE URL
 * ---------------------------------------------------------
 * Cấu hình đường dẫn gốc của ứng dụng
 * Ví dụ: 
 * http://hocweb123.com đường dẫn chạy online 
 * http://localhost/yourproject.com đường dẫn dự án ở local
 * 
 */



$config['base_url'] = "http://localhost/PHP-HOC/Baihoc/Chap27/MVC/";


//========================================================================================

// 🔹 Đây là cấu hình route mặc định khi bạn không truyền mod, controller, action trên URL:

// Ví dụ truy cập:
// http://localhost/PHP-HOC/Baihoc/Chap27/MVC/
// => PHP sẽ ngầm hiểu như:
// ?mod=home&controller=index&action=index

$config['default_module'] = 'home';
$config['default_controller'] = 'index';
$config['default_action'] = 'index';
