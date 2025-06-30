<?php
#Hàm lấy chi tiết một bài viết theo id
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

function get_post_by_id($id)
{
    global $list_post;
    
    // 1 là xài hàm có sẵn , 2 là xài foreach duyệt qua

    if (array_key_exists($id, $list_post))
    // foreach ($list_post as $key => $item) {
    //     if ($key == $id)
            return $list_post[$id];
    // }
    return false;
}

$data = get_post_by_id(2);
echo "<pre>";
print_r($data);
echo "</pre>";