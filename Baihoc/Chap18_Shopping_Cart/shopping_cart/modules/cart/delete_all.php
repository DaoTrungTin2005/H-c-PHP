<?php 
delete_cart(null) ;

// Xóa toàn bộ giỏ hàng xong thì chuyển hướng về trang giỏ hàng
// (để hiển thị thông báo giỏ hàng đã xóa thành công).
redirect("?mod=cart&act=show");
?>