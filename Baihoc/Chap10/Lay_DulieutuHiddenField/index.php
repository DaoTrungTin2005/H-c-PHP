<?php
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

// Kiển tra coi submit form chưa
if (isset($_POST['btn_login'])) {
    $infoUsers = array(
        'username' => 'admin',
        'password' => '123',
    );

    $error = array();

    if (empty($_POST['username'])) {
        $error['username'] = "CẦN nhập username";
    } else {

        $username = $_POST['username'];
    }

    if (empty($_POST['password'])) {
        $error['password'] = "CẦN nhập password";
    } else {

        $password = $_POST['password'];
    }

    // dữ liệu không có lỗi (nếu có lỗi thì khoogn thực thi)
    if (empty($error)) {
        if (($username == $infoUsers['username']) && ($password == $infoUsers['password'])) {

            // 👉 Nghĩa là sau khi đăng nhập thành công, bạn sẽ chuyển hướng (redirect) người dùng đến trang được khai báo sẵn trong field ẩn này – cụ thể là cart.php.
            $redirect_to = $_POST['redirect_to'];
            header("location:{$redirect_to}");
        } else {
            $error['login'] = "Tên đăng nhập or mật khau ko chính xác";
        }
    }

    // Nếu mảng error không rỗng (có lỗi) thì in ra lỗi
    if (!empty($error)) {
        show_array($error);
    }
}



?><html>

<head>
    <title>Nhận dữ liệu từ hidden field</title>
</head>

<body>
    <h1>Đăng nhập</h1>
    <form action="" method="POST">
        Name: <input type="text" name='username'><br><br>
        Password: <input type="password" name="password"><br><br>

        <!-- < 👉 Đây là trường ẩn (hidden field) trong form, người dùng không thấy được nó trên giao diện, nhưng khi
            form được gửi đi thì dữ liệu trong đó vẫn được gửi theo. -->
        <input type="submit" name='btn_login' value='Login'>
    </form>
</body>

</html>