<?php

#Tạo mảng lưu số nguyên lẻ từ 3 đến 150
$list_odd = array();
for ($i = 3 ; $i <=150 ; $i+=2){
    $list_odd[] = $i;
}
// echo "<pre>";
// print_r($list_odd);
// echo "<pre>";


#Tạo mảng lưu trữ thông tin bài viết
$list_post_cart = array(
    1 => array(
        'cat_id' => 1,
        'cat_title' => 'Xã hội',
    ),
    2 => array(
        'cat_id' => 2,
        'cat_title' => 'Thể thao',
    ),
    );

$list_post = array(
    1 => array(
        'id' => 1,
        'post_title' => 'Bài viết 1',
        'post_content' => 'Chi tiet bai viet 1',
        'post_desc' => 'Mo ta ngan bai viet 1',
        'cat_id' => 1
    ),
    2 => array(
        'id' => 2,
        'post_title' => 'Bài viết 2',
        'post_content' => 'Chi tiet bai viet 2',
        'post_desc' => 'Mo ta ngan bai viet 2',
        'cat_id' => 1
    )
    );

// echo "<pre>";
// print_r($list_post_cart);
// echo "<pre>";

// echo "<pre>";
// print_r($list_post);
// echo "<pre>";


?>
<html>

<head>
    <title>Bai viet</title>
</head>

</html>

<body>
    <h1>DS baiviet</h1>
    <ul>
        <?php if(!empty($list_post)) { 
        foreach($list_post as $item){
            ?>
        <li>
            <a href=""><?php echo $item['post_title']?></a>
            <p><?php echo $item['post_content']?></p>
        </li>
        <?php } }?>
    </ul>
</body>