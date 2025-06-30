<?php
echo 'trang login';


require '../../Chap11/lib/validation.php'; 

if (isset($_POST['btn_login'])) {
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = 'Không dc để trống username';
    } else {
        // Bắt độ dài trc rồi bắt cái cụm kia
        if (strlen($_POST['username']) < 6 || strlen($_POST['username']) > 32) {
            $error['username'] = "Username chỉ cho phép nhập từ 6 đến 32 kí tự";
        } else {
            // $Sparttern = "/^[A-Za-z0-9_\.]{6,32}$/";
            // if (!preg_match($Sparttern, $_POST['username'], $matchs))

            // Xài hàm
            if (!is_username($_POST['username']))
                $error['username'] = "Username chỉ cho phép nhập số, ký tự, dấu chấm, dấu gạch dưới, từ 6 đến 32 kí tự";
            else {
                $username = $_POST['username'];
            }
        }
    }

    if (empty($_POST['password'])) {
        $error['password'] = 'Không dc để trống password';
    } else {
        // Bắt độ dài trc rồi bắt cái cụm kia
        if (strlen($_POST['password']) < 6 || strlen($_POST['password']) > 32) {
            $error['password'] = "password chỉ cho phép nhập từ 6 đến 32 kí tự";
        } else {
            // $Sparttern = "/^[A-Z][A-Za-z0-9_\.!@#$%^&*()]{5,31}$/";
            // if (!preg_match($Sparttern, $_POST['password'], $matchs))

            if (!is_password($_POST['password']))
                $error['password'] = "Password yêu cầu sử dụng chữ cái, chữ số và ký tự đặc biệt, bắt đầu kí tự vắt hoa, có 6 đến 32 kí tự";
            else {
                $password = md5($_POST['password']);
            }
        }
    }

    if (empty($error)) {
        // echo  $username . '-----' . $password;
        $data = array(
            'username' => 'trungtin',
            'password' => 'Abc123@',
        );
            if(($username == $data['username']) && ($password == md5($data['password']))){
                header("location: index.php");
            }
    } else {
        echo "có lỗi";
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
        <input type="text" name="username" id="username" value="<?php echo set_value('username')   ?>" /><br>
        <!-- <p class="error">
            <? //php if (!empty($error['username'])) echo $error['username']; 
            ?>
        </p> -->

        <!-- xài hàm -->
        <?php echo form_error('username'); ?>

        <label for=" password">Password</label><br>
        <input type="password" name="password" id="password" /><br><br>
        <!-- <p class="error">
            <? // php if (!empty($error['password'])) echo $error['password']; 
            ?>
        </p> -->
        <?php echo form_error('password'); ?>

        <input type="submit" name="btn_login" value="Login" />
    </form>
</body>

</html>