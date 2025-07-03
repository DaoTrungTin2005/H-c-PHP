<?php
$file_url = 'uploads/cart jsp spring.docx';

// Thêm @ dô là nó ko hiển thị cảnh báo của hệ thống
if(@unlink($file_url)) {
    echo "File đã được xóa thành công: {$file_url}";
} else {
    echo "File ko tồn tại: {$file_url}";
}



?>