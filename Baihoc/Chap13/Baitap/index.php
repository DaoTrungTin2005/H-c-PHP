<?php
// nhúng xài hàm show_array()
require 'lib/data.php';

//Nhúng dữ liệu mẫu vô
require 'data/post.php';

// Nhúng cái hàm get_header và get_footer vô mới xài dc
require 'lib/template.php';

// require 'inc/header.php'
get_header();
?>

<?php
// In thử cái $page ra thử (Lấy cái page trên URL)
// $page = $_GET['page'];

// Thuong trang home sẽ ko có đường dẫn mà dô thẳng là nó ra luôn. Cấu hình nó :
$page = !empty($_GET['page']) ? $_GET['page'] : 'home';
echo "Lấy cái page trên URL: " . $page;
echo '<br>';

// In thử cái $path ra thử
$path = "pages/{$page}.php";
echo "in cái path: " . $path;

// In thử cái file ra thử (là cái file luôn á, csi hàm này nó cho ra cái file)
if (file_exists($path)) {
    require $path;
} else {
    // echo "ko tồn tại trang này";
    require 'inc/404.php';
}
?>
<?php
// require 'inc/footer.php'
get_footer();
?>