<?php
// Thêm sản phẩm vào giỏ hàng
function add_cart($id)
{

    global $list_product;

    // Lấy thông tin chi tiết của sản phẩm theo ID
    $item = get_product_by_id($id);

    // Nếu sản phẩm chưa có trong giỏ hàng → set qty = 1
    // Nếu đã có sản phẩm đó → tăng qty lên thêm 1
    $qty = 1;
    if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1; // Nếu đã có sản phẩm trong giỏ hàng thì tăng số lượng lên 1
    }


    //     Lưu thông tin chi tiết của một sản phẩm vào giỏ hàng.
    // Giỏ hàng này nằm trong $_SESSION['cart'], cụ thể là mảng con ['buy'].
    $_SESSION['cart']['buy'][$id] = array(

        'id' => $item['id'],
        'product_title' => $item['product_title'],
        'price' => $item['price'],
        'product_thumb' => $item['product_thumb'],
        'code' => $item['code'],
        'qty' => $qty,
        'sub_total' => $item['price'] * $qty, // Tổng tiền của sản phẩm này (số lượng * giá)
    );

    // cập nhất hóa đơn
    update_info_cart(); // Cập nhật thông tin giỏ hàng (số lượng và tổng tiền)
}


// Sau mỗi lần thêm sản phẩm, hàm này:
// Tính tổng số lượng sản phẩm đang có trong giỏ hàng (num_order)
// Tính tổng tiền toàn bộ đơn hàng (total)
// Gán vào $_SESSION['cart']['info'] để hiển thị ở các nơi khác như icon giỏ hàng, trang checkout, v.v.


function update_info_cart()
{
    if (isset($_SESSION['cart'])) {
        $num_order = 0;
        $total = 0;
        foreach ($_SESSION['cart']['buy'] as $item) {
            $num_order += $item['qty']; // Cộng dồn số lượng sản phẩm
            $total += $item['sub_total']; // Cộng dồn tổng tiền
        }

        $_SESSION['cart']['info'] = array(
            'num_order' => $num_order, // Tổng số lượng sản phẩm trong giỏ hàng
            'total' => $total,
        );
    }
}