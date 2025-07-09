<?php 
$id = (int)$_GET['id'];

delete_cart($id); // Gọi hàm xóa sản phẩm khỏi giỏ hàng

redirect("?mod=cart&act=show"); // Chuyển hướng về trang giỏ hàng sau khi xóa
?>