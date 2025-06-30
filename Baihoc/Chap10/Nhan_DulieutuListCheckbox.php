<?php
if (isset($_POST['btn_add'])) {

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";


    // Nếu người dùng có chọn ít nhất 1 checkbox (!empty($_POST['cat']))
    // Duyệt qua từng mục trong $_POST['cat'] và in giá trị ra (giá trị chính là value trong <input>)

    #cách xử lí 1
    if (!empty($_POST['cat'])) {
        foreach ($_POST['cat'] as $item) {
            echo $item . '<br>';
        }


        #cách xử lí 2
        $list_cat = implode(',', $_POST['cat']);
        echo $list_cat;
    }
}
?>



<!-- Có 2 checkbox:

Checkbox 1:
name="cat[9999]", value="1" ⇒ Khi chọn sẽ gửi $_POST['cat']['9999'] = 1
Label: "Thể thao"

Checkbox 2:
name="cat[123]", value="2" ⇒ Khi chọn sẽ gửi $_POST['cat']['123'] = 2
Label: "Xã hội" -->

<!-- Người dùng đã chọn danh mục ID 9999 (Thể thao)
Và danh mục ID 123 (Xã hội) -->

<!-- cat là tên mảng cha.
9999, 123 là key trong mảng, đại diện cho ID của danh mục.
value="1", value="2" là giá trị bạn muốn gửi khi checkbox được chọn.
Kết hợp lại: $_POST['cat'][ID_danh_muc] = Giá_trị. -->

<!-- Nếu người dùng chọn cả hai, thì khi submit, bạn sẽ nhận được:

$_POST['cat'] = [
9999 => 1,
123 => 2
];-->

<html>

<head>
    <title>Lấy dữ liệu từ List checkbox</title>
</head>

<body>
    <h1>Chọn danh mục</h1>
    <form action="" method="POST">
        <input type="checkbox" name="cat[9999]" value="1" id="cat1">
        <label for="cat 1">Thể thao</label><br /><br />
        <input type="checkbox" name="cat[123]" value="2" id="cat_2">
        <label for="cat 2">Xã hội</label><br /><br />
        <input type="submit" name="btn_add" value="Thêm bài viết">
    </form>
</body>