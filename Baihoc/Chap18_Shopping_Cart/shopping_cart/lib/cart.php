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
        // url	Đường dẫn đến trang chi tiết sản phẩm
        'url' => $item['url'],
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

// Trả về danh sách sản phẩm đang có trong giỏ hàng.
function get_list_buy_cart()
{
    if (isset($_SESSION['cart'])) {

        // Duyệt qua từng sản phẩm có trong giỏ hàng:
        // $id là ID của sản phẩm.
        // $item là mảng chứa thông tin sản phẩm đó (tên, giá, số lượng…).
        // Dấu & (tham chiếu) cho phép bạn thay đổi trực tiếp giá trị trong session.
        // 👉 Đây là cách thêm trường url vào từng sản phẩm ngay trong session, không tạo bản sao.
        foreach ($_SESSION['cart']['buy'] as $id => &$item) {
            if (!isset($item['url'])) {

                //Nếu sản phẩm chưa có đường link (URL) đến trang chi tiết, thì tự động thêm vào.
                $item['url'] = "?mod=product&act=detail&id={$id}";
            }
        }

        //☑️ Kết thúc vòng lặp, rồi trả về toàn bộ danh sách sản phẩm trong giỏ hàng.
        return $_SESSION['cart']['buy'];
    }
    return false;
}


// Trả về tổng số lượng sản phẩm trong giỏ hàng.
// 📌 $_SESSION['cart']['info']['num_order']:
// Giá trị này được tính từ update_info_cart(), chính là tổng của tất cả các qty của sản phẩm.
function get_num_order_cart()
{
    if (isset($_SESSION['cart'])) {
        // Trả về số lượng sản phẩm trong giỏ hàng
        return $_SESSION['cart']['info']['num_order'];
    }
}
