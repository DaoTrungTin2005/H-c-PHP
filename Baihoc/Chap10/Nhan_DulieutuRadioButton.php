<?php
if (isset($_POST['btn_reg'])) {
    $show_gender = array(
        'male' => 'Nam',
        'female' => 'Nữ',
    );

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    if (empty($_POST['gender'])) {
        echo "Chưa chọn gender";
    } else {
        $gender = $_POST['gender'];
        echo $show_gender[$gender];
    }
}




?><html>

<head>
    <title>Lấy dữ liệu từ radio button</title>
</head>

<body>
    <h1>Đăng ký</h1>
    <form action="" method="POST">
        <input type="radio" name="gender" value="male">Nam<br>
        <input type="radio" name="gender" value="female">Nu <br>
        <input type="submit" name='btn_reg' value='Register'>
    </form>
</body>


</html>