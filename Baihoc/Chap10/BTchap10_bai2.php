<?php
//Lấy dữ liệu form =đ kí tài khoản bao gồm : tên đăng nhập, mật khẩu, họ và tên, phone, giới tính
if (isset($_POST['btn_register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    echo $username.'----'.$password.'----'.$fullname.'----'.$phone.'----'.$gender;
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
    <h1>Form đăng kí tài khoản </h1>
    <form method="post" action="">
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" id="fullname" />
        <label for="username">Tên đăng nhập</label>
        <input type="text" name="username" id="username" />
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" id="password" />
        <label for="phone">Số điện thoại</label>
        <input type="text" name="phone" id="phone" />
        <select name="gender">
            <option value="male">Nam</option>
            <option value="female">Nu</option>
        </select>
        <input type="submit" id="btn_register" name="btn_register" value="Đăng Kí" />
    </form>
</body>

</html>