<?php

// $sql = "SELECT * FROM tbl_user ";

// //  Hàm mysqli_query() thực hiện câu lệnh SQL phía trên trên kết nối CSDL $conn, và trả về một tập kết quả (gọi là result set).
// $result = mysqli_query($conn, $sql);

// //  Tạo một mảng rỗng để lưu danh sách người dùng từ CSDL
// $list_users = array();

// //  Kiểm tra xem có ít nhất một dòng dữ liệu trong kết quả trả về hay không.
// $num_rows = mysqli_num_rows($result);

// if (($num_rows) > 0) {

//     //      Đây là vòng lặp để duyệt qua từng dòng dữ liệu trong kết quả:
//     // mysqli_fetch_assoc($result) sẽ lấy ra 1 dòng dữ liệu dưới dạng mảng kết hợp, ví dụ:

//     // $row = [
//     //     'id' => 1,
//     //     'fullname' => 'Đào Trung Tín',
//     //     'email' => 'tin@example.com'
//     // ];
//     while ($row = mysqli_fetch_assoc($result)) {

//         // $list_users[] = $row; sẽ thêm dòng đó vào mảng $list_users.
//         $list_users[] = $row;
//     }
// }

// 🔁 1. db_fetch_array("SELECT * FROM tbl_user")
// Dùng trong phần danh sách thành viên (foreach ($list_users as $user)).
// Lúc này, bạn muốn lấy toàn bộ dữ liệu từ bảng tbl_user => kết quả có thể nhiều dòng => cần dùng db_fetch_array().

// 🧍 2. db_fetch_row("SELECT * FROM tbl_user WHERE id = $id")
// Dùng trong phần sửa thông tin 1 người dùng cụ thể.
// Vì bạn chỉ cần lấy ra 1 dòng duy nhất (user có id tương ứng) để hiển thị lên form sửa => dùng db_fetch_row() là đúng.

$list_users = db_fetch_array("SELECT * FROM tbl_user");
$num_rows = db_num_rows("SELECT * FROM tbl_user");


show_array($list_users);


// &$user: dùng tham chiếu (&) để sửa trực tiếp từng phần tử trong mảng $list_users.
// $user['url_update']: Tạo đường link để sửa user này, gắn theo ID.
// $user['url_delete']: Tạo đường link để xóa user này.

// Ví dụ:
// $user['id'] = 3;
// → $user['url_update'] = "?mod=users&act=update&id=3";
// → $user['url_delete'] = "?mod=users&act=delete&id=3";
foreach ($list_users as &$user){
    $user['url_update'] = "?mod=users&act=update&id={$user['id']}";
    $user['url_delete'] = "?mod=users&act=delete&id={$user['id']}";
}
unset($user); // 🛠️ Dòng này bắt buộc để xóa tham chiếu, tránh lỗi ghi đè phần tử cuối

?>

<div id="content">
    <a class="add_new" href="?mod=users&act=add">Thêm mới</a>
    <style>
    .table_data thead tr td {
        font-weight: bold;
        border-bottom: 2px solid #333;
    }

    .table_data tr td {
        border-bottom: 1px solid #333;
        padding: 8px 15px
    }
    </style>

    <h1>Danh sách thành viên</h1>
    <?php if (!empty($list_users)) { ?>


    <table class="table_data">
        <thead>
            <tr>
                <td>STT</td>
                <td>Id</td>
                <td>Fullname</td>
                <td>Username</td>
                <td>Email</td>
                <td>Giới tính</td>
                <td>Thao tác</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $temp = 0;
                foreach ($list_users as $user) {
                    $temp++;
                ?>

            <tr>
                <td>
                    <?php echo $temp ?>
                </td>

                <td><?php echo $user['id'] ?></td>

                <td><?php echo $user['fullname'] ?></td>

                <td><?php echo $user['username'] ?></td>

                <td><?php echo $user['email'] ?></td>

                <td><?php echo show_gender($user['gender']) ?></td>

                <td><a href="<?php echo $user['url_update'] ?>">Sửa</a> |
                    <a href="<?php echo $user['url_delete'] ?>">Xóa</a>
                </td>
            </tr>

            <?php } ?>
        </tbody>
    </table>

    <?php echo "Có {$num_rows} dữ liệu user" ?>
    <?php } ?>


</div>