<?php
// isset() là một hàm trong PHP dùng để kiểm tra xem một biến có tồn tại và không có giá trị NULL hay không.

// isset($_POST['btn_order']): kiểm tra xem nút submit có tên là btn_order đã được bấm chưa.
// Nghĩa là chỉ khi nào người dùng nhấn nút "Đặt Hàng" thì mới xử lý bên trong.

//📌 Dữ liệu trong $_POST được gắn theo name của các input trong form
if (isset($_POST['btn_order'])) {

    //   Kiểm tra xem người dùng có chọn gì trong thẻ <select> hay không.
    // Nếu người dùng để nguyên là --Chọn--, tức là giá trị là "" (chuỗi rỗng), thì empty() sẽ trả về true.
    // ➤ Trong trường hợp đó, bạn sẽ thấy dòng: Cần chọn hình thức thanh toán

    if (empty($_POST['pay'])) {
        echo "Cần chọn hình thức thanh toán";
    } else {

        // print_r($_POST): in ra toàn bộ dữ liệu mà người dùng gửi qua form (phương thức POST).
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";


        //Nếu người dùng đã chọn hợp lệ (ví dụ: "cod" hoặc "banking"), thì sẽ:
        // Lưu giá trị đã chọn vào biến $pay
        // In ra giá trị đó để kiểm tra, ví dụ: cod hoặc banking
        $pay = $_POST['pay'];
        echo $pay;
    }
}

?>

<html>

<head>

    <title>Lấy dữ liệu từ radio button</title>
</head>


<body>
    <h1>Đăng ký</h1>
    <form action="" method="POST">
        <select name="pay">
            <option value="">--Chọn--</option>
            <option value="cod" selected="selected">Thanh toán tại nhà</option>
            <option value="banking">Thanh toán qua Thẻ tín dụng</option>
        </select>
        <input type="submit" name="btn_order" value="Đặt Hàng">
    </form>
</body>

</html>