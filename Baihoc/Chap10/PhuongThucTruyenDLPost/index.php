<?php



?><html>

<head>
    <title>Truyền dữ liệu form phương thức POST</title>
</head>

<body>
    <h1>Đăng nhập</h1>
    <form action="login.php" method="POST">
        Name: <input type="text" name='username'><br>
        password: <input type="password" name="password"><br>
        <input type="submit" name='btn login' value='Login'>
    </form>
</body>

</html>