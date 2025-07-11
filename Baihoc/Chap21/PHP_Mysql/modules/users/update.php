<?php
$id = (int)$_GET['id'];

$sql = "SELECT * FROM tbl_user WHERE id = $id";

// Gửi câu lệnh SQL lên CSDL (MySQL) bằng hàm mysqli_query.
$result = mysqli_query($conn, $sql);


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
$item = mysqli_fetch_array($result);

show_array($item);