<?php

// ✅ So sánh GET vs POST:
// Đặc điểm	GET	POST
// Truyền dữ liệu	    Trên URL (ví dụ: ?q=abc)	            Ẩn trong body của request
// Bảo mật	Kém hơn     (URL dễ bị nhìn thấy)	                Bảo mật hơn (dữ liệu không hiện trên URL)
// Giới hạn ký tự	    Có giới hạn độ dài URL (~2048 ký tự)	Không giới hạn thực tế (tùy server)
// Lưu lại URL	        Dễ bookmark hoặc lưu lại	            Không thể lưu dữ liệu vào URL

#Get dữ liệu từ url
$mod = $_GET['mod'];
$act = $_GET['act'];
$id = $_GET['id'];

echo "{$mod} --- {$act} --- {$id}" ;

function show_array($data){
    if (is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
}
}
if(isset($_GET['btn_search'])){
show_array($_GET);

$q = $_GET['q'];
echo $q;
}
?><html>

<head>
    <title>Truyền dữ liệu form phương thức GET</title>
</head>

<body>
    <a href="?mod=product&act=detail&id=1268">Sản phẩm</a>
    <h1>Tìm Kiếm</h1>
    <form action="" method="GET">
        Tìm Kiếm: <input type="text" name="q"><br>
        <input type="submit" name="btn_search" value="Search">
    </form>
</body>

</html>