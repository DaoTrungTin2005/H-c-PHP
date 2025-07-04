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

        // 🔹 Kiểm tra xem file đã tồn tại trên hệ thống chưa.
        // 🔸 Nếu đã tồn tại, ta sẽ tạo ra một tên mới để tránh ghi đè file cũ.
        if (file_exists($upload_file)) {


            //========== Xử lí đổi tên file tự động ==============

            // 🔹 Lấy tên file không bao gồm phần đuôi mở rộng (extension).
            // Ví dụ: anh.jpg → lấy được anh
            $file_name = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);

                // Tạo tên file mới bằng cách nối thêm chữ " -copy" vào tên gốc.
                // Ví dụ: anh → anh -copy
            ;
            $new_file_name = $file_name . ' -copy';
            echo "Tên file đang làm nè: $file_name <br>";
            echo "Tên file mới sẽ là: $new_file_name <br>";

            //🔹 Tạo đường dẫn file mới: thư mục + tên file mới + đuôi mở rộng
            // Ví dụ: uploads/anh -copy.jpg
            $new_upload_file = $upload_dir . $new_file_name . '.' . $type;
            echo "Tên Đường dẫn mới: $new_upload_file <br>";


            //🔹 Nếu anh -copy.jpg cũng đã tồn tại, thì sẽ thêm số vào như sau:
            // anh -copy(1).jpg
            // anh -copy(2).jpg
            // ...
            // Dừng khi tìm được 1 tên chưa tồn tại trên hệ thống.
            $k = 1;
            while (file_exists($new_upload_file)) {
                $new_file_name = $file_name . " -copy({$k}).";
                $k++;
                $new_upload_file = $upload_dir . $new_file_name . $type;
            }

            // Sau khi bạn đã tạo được một tên file mới không bị trùng (ví dụ: uploads/anh -copy(1).jpg), bạn cần gán lại giá trị đường dẫn file này cho biến chính $upload_file.
            $upload_file = $new_upload_file;
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