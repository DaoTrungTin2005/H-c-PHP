<?php
require 'db/connect.php'; // ✅ Đã sửa dấu nháy và dấu chấm phẩy

if (isset($_POST['btn_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // ✅ Viết lại câu SQL với nối chuỗi đúng cú pháp (cái này dễ bị sql injection)
    $sql = "SELECT * FROM tbl_user WHERE username = '" . $username . "' AND password = '" . $password . "'";

    $result = mysqli_query($conn, $sql);
    echo $sql; // ✅ Hiện câu SQL để kiểm tra nếu muốn

    if (mysqli_num_rows($result) > 0) {
        echo "Bạn được phép đăng nhập";
    } else {
        echo "Thông tin đăng nhập không hợp lệ";
    }
}
?><html>

<head>
    <title>SQL Injection</title>
</head>

<body>
    <h1>Đăng nhập tài khoản</h1>
    <form method="POST">
        <label>Tên đăng nhập<label><br>
                <input type="text" name="username" id="username" /><br>
                <label> Mật khẩu </label><br>
                <input type="password" name="password" id="password" /><br><br>
                <input type="submit" name="btn_login" value="Đăng nhập" />
    </form>
</body>
-



</html>