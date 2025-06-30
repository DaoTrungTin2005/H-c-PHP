<?php
# 1 tính tổng số trang $num,_page khi hiển thị tổng số bài viết $total_rows và số bài viết trên mỗi trang $num_per_page
$total_rows = 100 ;
$num_per_page = 25;

// Tính $num_page
$num_page = ceil($total_rows / $num_per_page);
echo $num_page;
echo"...";

#2. Xuất 1 mảng số nguyên chẳn từ 1 mảng số nguyên cho trc
$list_number = array(3,4,6,8,444,89);
$list_even = array();
if (!empty($list_number) && is_array($list_number)){
    foreach($list_number as $num){
        if($num % 2 == 0){
            $list_even[] = $num ;
        }
    }
}
echo "<pre>";
print_r($list_even);
echo "</pre>";

#3. Hiển thị danh mục theo đa cấp
$list_post_cat = array(
    1 => array('cat_id' => 1, 'cat_title' => 'GIAO DUC', 'level' => 0),
    2 => array('cat_id' => 2, 'cat_title' => 'khuyen hoc', 'level' => 1),
    3 => array('cat_id' => 3, 'cat_title' => 'du hoc', 'level' => 1),
    4 => array('cat_id' => 4, 'cat_title' => 'THE THAO', 'level' => 0),
    5 => array('cat_id' => 5, 'cat_title' => 'chau au', 'level' => 1),
    6 => array('cat_id' => 6, 'cat_title' => 'chau a', 'level' => 1),
)

?>
<HTMl>

<HEAD>
    <TITLE>Danh Muc</TITLE>
</HEAD>

</HTMl>

<BODY>
    <table>
        <thead>
            <tr>
                <td>STT</td>
                <td>Ten</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $temp = 0 ;
            if (!empty($list_post_cat)){
                foreach ($list_post_cat as $item){
                    $temp++ ;
            ?>

            <tr>
                <td>
                    <?php echo $temp?></td>
                <td>
                    <!-- xài str_repeat . Tức lặp lại cái '--' theo số lần (số lần ở đây là dc lấy dữ liệu ra từ mảng $item['level'] -->
                    <?php echo str_repeat('--', $item['level']).$item['cat_title']?>
                </td>
            </tr>

            <?php } } ?>
        </tbody>
    </table>

</BODY>