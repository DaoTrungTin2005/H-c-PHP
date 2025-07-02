<?php
require 'lib/data.php';
// in ra thông tin của file khi nhấn submit (nhấn submit thì nó chuyển qua trang upload.php hoặc xử lí tại trang này luôn)

if (isset($_FILES['file'])) {


    show_array($_FILES);

    // Các bước để lưu file vào folder uploads

    //Thư mục chứa file upload
    $upload_dir = 'uploads/';

    //Dường dẫn của file upload (là khi upload nó sẽ lưu dô cái thư mục uploads này(uploads/tên thư mục))
    $upload_file = $upload_dir . basename($_FILES['file']['name']);


    if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
        echo "File đã được upload thành công: (tên đường dẫn khi upload file vào) " . $upload_file;
        echo "<br>";
        // Hiển thị link tải file
        echo "<a href='{$upload_file}'>Tải file về : " . $_FILES['file']['name'] . "</a>";
    } else {
        echo "Có lỗi xảy ra khi upload file.";
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