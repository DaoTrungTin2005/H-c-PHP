<?php
if (isset($_POST['btn_reg'])) {
    $error = array();
    if (empty($_POST['gender'])) {
        $error['gender'] = 'Không dc để trống gender';
    } else {
        $gender = $_POST['gender'];
    }


    if (empty($error)) {
        echo  $gender;
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
    <style>
    p.error {
        color: red
    }
    </style>
    <h1>Đăng ký</h1>
    <form action="" method="POST">
        <label for="fullname">Ho và tên</label> <br>
        <input type="text" name="fullname" id="fullname" /><br><br>

        <label>Giới tính</label> <br>
        <select name="gender">
            <option value="">---Chọn----</option>
            <option <?php if (!empty($gender) && $gender == 'male') echo "selected='selected'"; ?> value="male">Nam
            </option>
            <option <?php if (!empty($gender) && $gender == 'female') echo "selected='selected'"; ?> value="female">Nu
            </option>
        </select>
        <?php if (!empty($error['gender'])) echo "<p class='error'>{$error['gender']}</p>"?>
        <br> <br>
        <input type="submit" name="btn_reg" value="Register" />
    </form>
</body>

</html>