<?php

// 🔹 Chức năng:
// Tìm thông tin danh mục (category) sản phẩm theo cat_id.
// 🔹 Input: $cat_id (ID của danh mục)
// 🔹 Output: Trả về mảng thông tin danh mục nếu tìm thấy, ngược lại trả về false.
function get_info_cat($cat_id)
{
    global $list_product_cat;
    if (array_key_exists($cat_id, $list_product_cat)) {
        $list_product_cat[$cat_id]['url'] = "?mod=product&act=main&cat_id={$cat_id}";
        return $list_product_cat[$cat_id];
    }
    return false;
}

// 🔹 Chức năng:
// Lấy danh sách sản phẩm thuộc một danh mục nào đó.
// 🔹 Điểm hay: Thêm key url cho mỗi sản phẩm để tạo liên kết đến chi tiết sản phẩm.
function get_list_product_by_cat_id($cat_id)
{
    global $list_product;
    $result = array();
    foreach ($list_product as $item) {
        if ($item['cat_id'] == $cat_id) {
            $item['url'] = "?mod=product&act=detail&id={$item['id']}";
            $result[] = $item;
        }
    }
    return $result;
}


// Tìm một sản phẩm theo id. Nếu có, thêm đường dẫn để thêm sản phẩm vào giỏ hàng (url_add_cart).
function get_product_by_id($id)
{
    global $list_product;
    if (array_key_exists($id, $list_product)) {

        //  url_add_cart: để khi click “Thêm vào giỏ hàng”
        // url: để khi click vào tên ảnh hoặc tên sản phẩm thì đi đến trang chi tiết.
        $list_product[$id]['url_add_cart'] = "?mod=cart&act=add&id={$id}";

        return $list_product[$id];
    }
    return false;
}