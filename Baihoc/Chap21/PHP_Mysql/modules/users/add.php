    <?php
    if (isset($_POST['btn_reg'])) {
        $error = array();
        $alert = array();
        #Kiểm tra fullname

        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trồng fullname";
        } else {
            $fullname = $_POST['fullname'];
        }

        #Kiểm tra giới tính
        if (empty($_POST['gender'])) {
            $error['gender'] = "Bạn cần chọn giới tính";
        } else {
            $gender = $_POST['gender'];
        }

        #Kiểm tra username
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống tên đăng nhập";
        } else {
            $pattern = '/^[A-Za-z0-9_\.]{6,32}$/';
            if (!preg_match($pattern, $_POST['username'])) {
                $error['username'] = "Tên đăng nhập không đúng định dạng";
            } else {
                $username = $_POST['username'];
            }
        }


        #Kiểm tra password
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trồng mật khẩu";
        } else {
            $pattern = '/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/';
            if (!preg_match($pattern, $_POST['password'])) {
                $error['password'] = "Mật khẩu không đúng định dạng";
            } else {
                $password = md5($_POST['password']);
            }
        }


        #Kiểm tra email
        if (empty($_POST['email'])) {
            $error['email'] = "Không được để trồng email";
        } else {
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $error['email'] = "Email không đúng định dạng";
            } else {
                $email = $_POST['email'];
            }
        }


        if (empty($error)) {
            $sql = "INSERT INTO tbl_user (fullname, email, password, username, gender)"
                . "VALUES ('{$fullname}', '{$email}', '{$password}', '{$username}', '{$gender}')";

            //Đây là hàm thực thi câu lệnh SQL trong PHP dùng MySQLi.
            if (mysqli_query($conn, $sql)) {
                echo "Them dl thanh cong";
                header("Location: ?mod=users&act=main");
                exit();
            }
        } else {
        }
    }
    ?>

    <div id="content">
        <h2 style="text-align:center">Thêm mới</h2>
        <?php

        ?>
        <form action="" method="POST">
            <label for="fullname">Họ và tên</label>
            <input type="text" name="fullname" id="fullname" value="<?php echo isset($fullname) ? $fullname : ''; ?>">
            <?php echo isset($error['fullname']) ? '<p style="color:red;">' . $error['fullname'] . '</p>' : ''; ?>

            <label for="username">Tên đăng nhập</label>
            <input type="text" name="username" id="username" value="<?php echo isset($username) ? $username : ''; ?>">
            <?php echo isset($error['username']) ? '<p style="color:red;">' . $error['username'] . '</p>' : ''; ?>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo isset($email) ? $email : ''; ?>">
            <?php echo isset($error['email']) ? '<p style="color:red;">' . $error['email'] . '</p>' : ''; ?>

            <label for="password">Mật khẩu</label>
            <input type="password" name="password" id="password">
            <?php echo isset($error['password']) ? '<p style="color:red;">' . $error['password'] . '</p>' : ''; ?>

            <label for="gender">Giới tính</label>
            <select name="gender" id="gender">
                <option value="">--Chọn giới tính--</option>
                <option value="male" <?php echo (isset($gender) && $gender == 'male') ? 'selected' : ''; ?>>Nam</option>
                <option value="female" <?php echo (isset($gender) && $gender == 'female') ? 'selected' : ''; ?>>Nữ
                </option>
                <option value="other" <?php echo (isset($gender) && $gender == 'other') ? 'selected' : ''; ?>>Khác
                </option>
            </select>
            <?php echo isset($error['gender']) ? '<p style="color:red;">' . $error['gender'] . '</p>' : ''; ?>

            <br><br>
            <input type="submit" name="btn_reg" value="ĐĂNG KÝ">
        </form>
    </div>