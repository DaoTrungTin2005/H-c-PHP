<?php
// Lấy cat_id từ URL (ví dụ cat_id=2) để biết đang xem danh mục nào.
// Ép kiểu về số nguyên để tránh lỗi và bảo mật.

echo "<br>";
$cat_id = (int)$_GET['cat_id'];
echo "cat_id =" . $cat_id;


?>
<div id="content">
    <h1>Danh sách sản phẩm - Danh Mục <?php echo $cat_id?> </h1>
</div>