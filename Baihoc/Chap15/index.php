<?php
require 'lib/data.php';
// in ra thông tin của file khi nhấn submit (nhấn submit thì nó chuyển qua trang upload.php hoặc xử lí tại trang này luôn)

// Kiểm tra người dùng vừa submit file

// Nếu có file :
if (isset($_FILES['file'])) {

    //Show thông tin file ra
    show_array($_FILES);

    // Tạo mảng lỗi để lưu lỗi
    $error = array();

    //$upload_dir: Thư mục sẽ chứa file upload.
    $upload_dir = 'uploads/';

    //$upload_file: Đường dẫn đầy đủ tới file sau khi upload.
    $upload_file = $upload_dir . $_FILES['file']['name'];

    // Xử lý upload dung file ảnh

    //tạo một mảng các đuôi file ảnh được cho phép, gồm:
    $type_allow = array('png', 'jpg', 'gif', 'jpeg');

    //Dùng pathinfo(..., PATHINFO_EXTENSION) để lấy đuôi file.
    $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

    //Nếu đuôi file không nằm trong danh sách $type_allow → báo lỗi.
    // 📌 strtolower($type) dùng để chuyển đuôi file về chữ thường hết, tránh trường hợp người dùng upload file tên như Ảnh.PNG hay ẢNH.JPEG mà bị sai vì chữ in hoa.
    // → Nếu không nằm trong danh sách cho phép, dòng dưới sẽ thêm lỗi vào mảng $error với thông báo
    if (!in_array(strtolower($type), $type_allow)) {
        $error['file type'] = "Chỉ được upload file ảnh có định dạng png, jpg, gif, jpeg";
    } else {

        #Upload file có kích thước cho phép (<20MB 29.000.000 Byte)

        $file_size = $_FILES['file']['size'];
        if ($file_size > 29000000) {
            $error['file size'] = "Chỉ được upload file bé hơn 20 MB";
        }

        if (file_exists($upload_file)) {
            $error['file exists'] = "File đã tồn tại trên hệ thống";
        }

        // Nếu không có lỗi, tiến hành lưu file
        if (empty($error)) {

            //move_uploaded_file(): Hàm PHP để lưu file từ thư mục tạm sang thư mục bạn chỉ định.

            if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {

                // Nếu thành công:
                // Hiện ảnh vừa upload.
                // Tạo link download.
                echo "Upload file thành công: <img src='$upload_file' /><br>";
                echo "<a href='$upload_file'>Download: {$_FILES['file']['name']}</a>";
            } else {
                echo "Upload file không thành công";
            }
        } else {
            /// Nếu có lỗi, hiển thị mảng lỗi
            show_array($error);
        }
    }
}
?>

<html>

<head>
    <title>Upload file lên server với php</title>
</head>

<body>
    <h1>Upload file</h1>

    <!--doi action thành upload.php thì nó sẽ qua trang đó xử lí-->
    <form enctype="multipart/form-data" action="" method="POST">
        <br> <input type="file" name="file" /> <br><br>
        <input type="submit" value="Gửi file" />
    </form>
</body>

</html>