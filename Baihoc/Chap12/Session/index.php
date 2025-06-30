<?php 
echo "đây là trang chủ <br>";
session_start();



if(!isset($_SESSION['is_login']))
    header("Location: login.php");
else{
    echo $_SESSION['user_login'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="logout.php">Đăng xuất</a>
</body>

</html>