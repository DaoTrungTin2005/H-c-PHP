<?php
//Lấy dữ liệu form đăng nhâpj bao gồm : tên đăng nhập, mật khẩu
if (isset($_POST['btn_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username.'----'.$password;
}


?><html>

<head>
    <title>Form đăng nhập</title>
</head>

<body>
    <style>
    label {
        display: block;
        padding: 8px 0px;
    }

    input {
        display: block;
    }

    #btn_login {
        margin-top: 20px;
    }
    </style>
    <form method="post" action="">
        <label for="username">Tên đăng nhập</label>
        <input type="text" name="username" id="username" />

        <label for="password">Mật khẩu</label>
        <input type="password" name="password" id="password" />

        <input type="submit" name="btn_login" id="btn_login" value=" Đăng Nhập">
    </form>

</body>

</html>