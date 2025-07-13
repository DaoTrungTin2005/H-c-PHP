<?php

// 🔹 global $config;
// Lấy biến $config từ file config/config.php
// Vì $config là biến toàn cục nên muốn dùng phải global nó ra

// 🔹 $config['base_url']
// Đây là đường dẫn gốc của website
// Bạn đã cấu hình sẵn:
// $config['base_url'] = "http://localhost/PHP-HOC/Baihoc/Chap27/MVC/";
// 🔹 return $config['base_url'] . $url;
// Nối thêm đường dẫn con nếu có

// 📌 Ví dụ dùng:
// 🧠 Gọi hàm:
// echo base_url('public/css/style.css');

// ✅ Kết quả:
// http://localhost/PHP-HOC/Baihoc/Chap27/MVC/public/css/style.css

function base_url($url = "")
{
    global $config;
    return $config['base_url'] . $url;
}