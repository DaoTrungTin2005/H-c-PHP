<?php

//Mục tiêu của đoạn code:
// Tạo một form để người dùng nhập nội dung bài viết vào ô <textarea> và gửi đi. Sau đó PHP sẽ:
// Kiểm tra xem người dùng đã bấm nút "Thêm bài viết" chưa.
// Kiểm tra xem nội dung có bị bỏ trống không.
// Nếu có nhập, thì hiển thị nội dung ra màn hình.

// isset($_POST['btn_add']): kiểm tra xem nút submit có tên là btn_add đã được bấm chưa.
// Nghĩa là chỉ khi nào người dùng nhấn nút "Thêm bài viết" thì mới xử lý bên trong.
if (isset($_POST['btn_add'])) {

    //  empty($_POST['post_detail']): kiểm tra xem người dùng có nhập nội dung vào textarea hay không.
    // Nếu rỗng → in ra: "Bạn cần nhập vào thông tin bài viết".
    if (empty($_POST['post_detail'])) {
        echo "Bạn cần nhập vào thông tin bài viết";
    } else {

        // Nếu không rỗng:
        // Gán giá trị người dùng nhập vào biến $post_detail
        // In ra nội dung đó: echo $post_detail;
        $post_detail = $_POST['post_detail'];
        echo $post_detail;
    }
}


?>
<html>

<head>

    <title>Lấy dữ liệu từ radio button</title>
</head>


<body>
    <h1>Thêm bài viết</h1>
    <form action="" method="POST">
        <textarea name="post_detail" cols="50" rows="15"></textarea><br></ br>
        <input type="submit" name="btn_add" value="Thêm bài viết">
    </form>
</body>

</html>