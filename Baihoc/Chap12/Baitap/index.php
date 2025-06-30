<?php
echo "đây là trang chủ <br>";
session_start();


// Nếu chưa login qua session thì kiểm tra cookie

// Dòng này kiểm tra xem người dùng đã login chưa bằng cách hỏi:
// Có tồn tại biến $_SESSION['is_login'] không?
// Nếu có ⇒ người dùng đã đăng nhập → không cần kiểm tra cookie
// Nếu chưa có ⇒ cần kiểm tra cookie để có thể khôi phục phiên đăng nhập
if (!isset($_SESSION['is_login'])) {

    //   📌 Nếu session chưa có, thì tiếp tục kiểm tra xem:
    // Có cookie is_login tồn tại không.
    // Và cookie đó có giá trị true.
    if (isset($_COOKIE['is_login']) && $_COOKIE['is_login']) {


        //          Nếu cookie hợp lệ:
        // Bạn phục hồi session từ cookie.
        // $_SESSION['is_login'] = true → đánh dấu đã đăng nhập.
        // $_SESSION['user_login'] = $_COOKIE['user_login'] → lưu lại tên người dùng.
        $_SESSION['is_login'] = true;
        $_SESSION['user_login'] = $_COOKIE['user_login'];

    } else {
        // Không có session và không có cookie => về lại login
        header("Location: login.php");
        exit();
    }
}

// Đoạn code để in ra chơi chơi á mà
// Nếu để đoạn code này trc thì : 👉 Bạn đã chuyển hướng (header("Location...")) trước khi kiểm tra cookie, nên cookie không có cơ hội khôi phục session.
if (!isset($_SESSION['is_login']))
    header("Location: login.php");
else {
    echo "session : " . $_SESSION['user_login'];
}

if (isset($_COOKIE['is_login'])) {
    echo "   cookie : " . $_COOKIE['user_login'];
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