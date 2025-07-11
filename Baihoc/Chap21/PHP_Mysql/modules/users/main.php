<?php


$sql = "SELECT * FROM tbl_user ";

//  Hàm mysqli_query() thực hiện câu lệnh SQL phía trên trên kết nối CSDL $conn, và trả về một tập kết quả (gọi là result set).
$result = mysqli_query($conn, $sql);

//  Tạo một mảng rỗng để lưu danh sách người dùng từ CSDL
$list_users = array();

//  Kiểm tra xem có ít nhất một dòng dữ liệu trong kết quả trả về hay không.
if (mysqli_num_rows($result) > 0) {

    //      Đây là vòng lặp để duyệt qua từng dòng dữ liệu trong kết quả:
    // mysqli_fetch_assoc($result) sẽ lấy ra 1 dòng dữ liệu dưới dạng mảng kết hợp, ví dụ:

    // $row = [
    //     'id' => 1,
    //     'fullname' => 'Đào Trung Tín',
    //     'email' => 'tin@example.com'
    // ];
    while ($row = mysqli_fetch_assoc($result)) {

        // $list_users[] = $row; sẽ thêm dòng đó vào mảng $list_users.
        $list_users[] = $row;
    }
}
show_array($list_users);

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

                        <td><?php echo $user['gender'] ?></td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>

    <?php } ?>


</div>