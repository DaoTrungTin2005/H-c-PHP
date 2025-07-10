<?php
// Kiểm tra xem người dùng đã nhấn nút "Cập nhật" chưa
if (isset($_POST['btn_update_cart'])) {

    update_cart($_POST['qty']);

    redirect("?mod=cart&act=show");
    show_array($_POST);
}
