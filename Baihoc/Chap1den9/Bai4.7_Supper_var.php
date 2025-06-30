<?php

// Hiển thị tất cả thông tin về máy chủ và môi trường yêu cầu hiện tại.

// Hiển thị thông tin đó dưới dạng dễ đọc (nhờ print_r) và giữ nguyên định dạng (nhờ <pre> tags) trên trình duyệt web.

// Khi bạn chạy đoạn code này trên trình duyệt, bạn sẽ thấy một danh sách dài các cặp khóa-giá trị, cung cấp các thông tin như:

// DOCUMENT_ROOT: Thư mục gốc của tài liệu web (ví dụ: C:/xampp/htdocs).

// REMOTE_ADDR: Địa chỉ IP của client (người dùng) gửi yêu cầu.

// REQUEST_URI: Đường dẫn đầy đủ của tài nguyên được yêu cầu (ví dụ: /PHP-HOC/Baihoc/Bai4.2_Constant.php).

// SCRIPT_FILENAME: Đường dẫn đầy đủ của script PHP hiện tại trên máy chủ.

// SERVER_NAME: Tên máy chủ (ví dụ: localhost).

// SERVER_PORT: Cổng mà máy chủ đang lắng nghe (ví dụ: 80).

// REQUEST_METHOD: Phương thức yêu cầu (ví dụ: GET, POST).

// HTTP_USER_AGENT: Thông tin về trình duyệt và hệ điều hành của người dùng.

// HTTP_ACCEPT_LANGUAGE: Ngôn ngữ được chấp nhận bởi trình duyệt của người dùng.

// Và rất nhiều thông tin khác nữa.

echo "<pre>";
print_r($_SERVER);
echo "<pre>";
?>