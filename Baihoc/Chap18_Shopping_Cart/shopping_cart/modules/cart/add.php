<?php
//  Lấy ID sản phẩm từ URL, ép kiểu sang số nguyên
$id = (int)$_GET['id'];

// / Gọi hàm để thêm sản phẩm đó vào giỏ hàng
add_cart($id);

//  Hiển thị nội dung giỏ hàng

// $_SESSION['cart'] = [
//     'buy' => [...],   // Chứa danh sách các sản phẩm
//     'info' => [...]   // Chứa tổng số lượng và tổng tiền
// ];
// show_array($_SESSION['cart']);

// Thêm vào giỏ hàng thì chuyển hướng về trang giỏ hàng
redirect('?mod=cart&act=show');

?>