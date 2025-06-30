<?php
if (isset($_POST['btn_login'])) {
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = 'Không dc để trống username';
    } else {
        $username = $_POST['username'];
    }

    if (empty($_POST['password'])) {
        $error['password'] = 'Không dc để trống password';
    } else {
        $password = $_POST['password'];
    }

    if (empty($error)) {
        echo  $username . '-----' . $password;
    } else {
        echo "<pre>";
        print_r($error);
        echo "</pre>";
    }
}
?>

<html>

<head>
    <title>Chuẩn hóa dữ liệu Form đăng nhập</title>
</head>

<body>
    <h1>Đăng nhập</h1>
    <form action="" method="POST">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" value="<?php if(!empty($username)) echo $username?>" /><br>
        <p class="error">
            <?php if(!empty($error['username'])) echo $error['username'] ;?>
        </p>
        <label for=" password">Password</label><br>
        <input type="password" name="password" id="password" /><br><br>
        <p class="error">
            <?php if(!empty($error['password'])) echo $error['password'] ;?>
        </p>
        <input type="submit" name="btn_login" value="Login" />
    </form>
</body>

</html>