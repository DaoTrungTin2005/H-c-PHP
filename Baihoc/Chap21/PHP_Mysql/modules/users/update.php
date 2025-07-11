<?php
$id = (int)$_GET['id'];


?>


<?php
if (isset($_POST['btn_update'])) {
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


    // Nếu không có lỗi thì update
    if (empty($error)) {
        //     $sql = "UPDATE tbl_user SET fullname ='{$fullname}', gender ='{$gender}' WHERE id= {$id}";

        //     //Đây là hàm thực thi câu lệnh SQL trong PHP dùng MySQLi.
        //     if (mysqli_query($conn, $sql)) {
        //         echo "Update dl thanh cong";
        //     }
        // } else {
        // }


        $data = array(
            'fullname' => $fullname,
            'gender' => $gender,

        );

        db_update('tbl_user', $data, "id= {$id}");
        redirect("?mod=users&act=main");
    }
}

// nói chung là cái này để Lấy thông tin của người dùng từ database ra để update (la để hiện thông tin cũ của ng cần update rồi mói update(hieen ở form á))

// $sql = "SELECT * FROM tbl_user WHERE id = $id";

// Gửi câu lệnh SQL lên CSDL (MySQL) bằng hàm mysqli_query.
// $result = mysqli_query($conn, $sql);


// mysqli_fetch_array() sẽ lấy dòng đầu tiên của kết quả SQL và trả về dạng mảng (array).
// Mảng này sẽ chứa các giá trị của dòng đó: ví dụ nếu dòng có 4 cột:

// Array
// (
//     [0] => 5
//     [id] => 5
//     [1] => Đào Trung Tín
//     [fullname] => Đào Trung Tín
//     [2] => trungtin99
//     [username] => trungtin99
//     [3] => tin@example.com
//     [email] => tin@example.com
// )
// $item = mysqli_fetch_array($result);


// 🔁 1. db_fetch_array("SELECT * FROM tbl_user")
// Dùng trong phần danh sách thành viên (foreach ($list_users as $user)).
// Lúc này, bạn muốn lấy toàn bộ dữ liệu từ bảng tbl_user => kết quả có thể nhiều dòng => cần dùng db_fetch_array().

// 🧍 2. db_fetch_row("SELECT * FROM tbl_user WHERE id = $id")
// Dùng trong phần sửa thông tin 1 người dùng cụ thể.
// Vì bạn chỉ cần lấy ra 1 dòng duy nhất (user có id tương ứng) để hiển thị lên form sửa => dùng db_fetch_row() là đúng.

$item = db_fetch_row("SELECT * FROM tbl_user WHERE id = $id");
show_array($item);


?>

<div id="content">
    <h2 style="text-align:center">Sửa du lieu</h2>
    <?php

    ?>
    <form action="" method="POST">
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" id="fullname"
            value="<?php echo isset($item['fullname']) ? $item['fullname'] : ''; ?>">
        <?php echo isset($error['fullname']) ? '<p style="color:red;">' . $error['fullname'] . '</p>' : ''; ?>


        <label for="gender">Giới tính</label>
        <?php
        // Nếu đã submit thì dùng giá trị đã chọn, ngược lại dùng giá trị từ CSDL
        $current_gender = isset($_POST['gender']) ? $_POST['gender'] : $item['gender'];
        ?>
        <select name="gender" id="gender">
            <option value="">--Chọn giới tính--</option>
            <option value="male" <?php echo ($current_gender == 'male') ? 'selected' : ''; ?>>Nam</option>
            <option value="female" <?php echo ($current_gender == 'female') ? 'selected' : ''; ?>>Nữ</option>
            <option value="other" <?php echo ($current_gender == 'other') ? 'selected' : ''; ?>>Khác</option>
        </select>
        <?php echo isset($error['gender']) ? '<p style="color:red;">' . $error['gender'] . '</p>' : ''; ?>

        <br><br>
        <input type="submit" name="btn_update" value="CAP NHAT">
    </form>
</div>