<?php
if(isset($_POST['btn_login'])){
    
    if (empty ($_POST['username'])){
        echo "CẦN nhập username";
    }
    else{
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    
    $username = $_POST['username'];
    echo $username;
}
}
?>
<html>

<head>
    <title>Lấy dữ liệu từ textbox</title>
</head>

<body>
    <h1>Đăng nhập</h1>
    <form action="" method="POST">
        Username: <input type="text" name='username'><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" name='btn_login' value='Login'>
    </form>
</body>

</html>