<?php

// Nhúng mảng $list_user từ file data/users.php để có danh sách user kiểm tra đăng nhập.
require __DIR__ . '/../data/users.php';

//Nhúng file chứa các hàm kiểm tra
require '../../Chap11/lib/validation.php';

echo 'trang login';

//Kiểm tra nếu người dùng ấn nút login
if (isset($_POST['btn_login'])) {
    $error = array();

    // Bắt rỗng đầu tiên
    if (empty($_POST['username'])) {
        $error['username'] = 'Không dc để trống username';
    } else {

        // Bắt độ dài trc rồi bắt cái cụm kia
        if (strlen($_POST['username']) < 6 || strlen($_POST['username']) > 32) {
            $error['username'] = "Username chỉ cho phép nhập từ 6 đến 32 kí tự";
        } else {

            // Xài hàm validation ở bài 11, rồi bắt nguyên cụm parttern
            if (!is_username($_POST['username']))
                $error['username'] = "Username chỉ cho phép nhập số, ký tự, dấu chấm, dấu gạch dưới, từ 6 đến 32 kí tự";

            // Nếu không có lỗi nào thì gán username người dùng nhập vào biến $username để sử dụng sau này
            else {
                $username = $_POST['username'];
            }
        }
    }

    if (empty($_POST['password'])) {
        $error['password'] = 'Không dc để trống password';
    } else {

        if (strlen($_POST['password']) < 6 || strlen($_POST['password']) > 32) {
            $error['password'] = "password chỉ cho phép nhập từ 6 đến 32 kí tự";
        } else {

            if (!is_password($_POST['password']))
                $error['password'] = "Password yêu cầu sử dụng chữ cái, chữ số và ký tự đặc biệt, bắt đầu kí tự vắt hoa, có 6 đến 32 kí tự";
            else {
                $password = md5($_POST['password']);
            }
        }
    }

    if (empty($error)) {
        // Tìm user hợp lệ trong mảng
        // $list_user	Là mảng chứa các user đã định nghĩa sẵn (ở file users.php)
        $data = null;
        foreach ($list_user as $user) {

            //Nếu khớp, gán user vào biến $data và thoát vòng lặp ngay để tiết kiệm thời gian
            if ($user['username'] == $username && $user['password'] == $password) {
                $data = $user;
                break;
            }
        }

        // Nếu $data khác null ⇒ nghĩa là đã tìm được user hợp lệ.
        if ($data !== null) {

            //Ghi nhớ đăng nhập (cookie nếu tích checkbox)
            if (isset($_POST['remember_me'])) {
                setcookie('is_login', true, time() + 3600);
                setcookie('user_login', $data['username'], time() + 3600);
            }

            //🔸 Thiết lập SESSION (đăng nhập thành công) (có thể in ra thông tin user dựa vào session)
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = $data['username'];
            //✅ Sau khi login thành công, người dùng sẽ được chuyển về trang chính.
            header("location: index.php");
        }

        //Nếu có lỗi đầu vào (username/password sai định dạng, bị bỏ trống, v.v.) thì in mảng lỗi ra để debug dễ dàng.
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

        <!-- xài hàm để giữ lại giá trị username -->
        <input type="text" name="username" id="username" value="<?php echo set_value('username')   ?>" /><br>

        <!-- xài hàm để in lỗi  -->
        <?php echo form_error('username'); ?>

        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" /><br><br>

        <!-- xài hàm để in lỗi  -->
        <?php echo form_error('password'); ?>
        <br>
        <input type="checkbox" name="remember_me" id="remember_me" />
        <label for="remember_me">Ghi nhớ đăng nhập</label>
        <input type="submit" name="btn_login" value="Login" />
    </form>
</body>

</html>