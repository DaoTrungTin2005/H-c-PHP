<?php
// Tạo link và lấy thông tin từ url

//🧠 Sự khác biệt giữa GET và POST
// Tiêu chí	GET	POST
// 📤 Dữ liệu gửi đi	    Gửi qua URL (hiện lên trên thanh địa chỉ)	Gửi trong body (ẩn)
// 📺 Thấy được dữ liệu?	✅ Có (dễ copy, chia sẻ)	                  ❌ Không thấy được trên URL
// 📦 Dung lượng	        Giới hạn (~2048 ký tự)	                    Lớn hơn (gửi được nhiều dữ liệu)
// 🔐 Bảo mật	            Kém bảo mật (ai cũng thấy dữ liệu)	        Tốt hơn cho dữ liệu nhạy cảm
// ♻️ Dùng khi nào?	        Tốt cho liên kết, chuyển trang	            Tốt cho form nhập liệu
$mod = $_GET['mod'];
$act = $_GET['act'];

echo "Mod: {$mod} <br/> Action: {$act} <br/>";
?><html>

<head>
    <title>Danh mục sản phẩm</title>
</head>

<body>
    <a href='?mod=product&act=main'>Sản phẩm</a>
</body>

</html>