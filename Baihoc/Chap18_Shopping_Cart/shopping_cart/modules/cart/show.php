<?php
// show thử dữ lieu giỏ hàng 

// Thay vì như này để xem thông tin giỏ hàng thì viết dô cái hàm get_list_buy_cart()
// show_array($_SESSION['cart']);

$list_buy = get_list_buy_cart();
show_array($list_buy);
?>

<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <h3 class="title">Giỏ hàng</h3>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <?php
        if (!empty($list_buy)) {
        ?>

        <div class="section" id="info-cart-wp">
            <div class="section-detail table-responsive">

                <form action="?mod=cart&act=update" method="post">

                    <table class="table">
                        <thead>
                            <tr>
                                <td>Mã sản phẩm</td>
                                <td>Ảnh sản phẩm</td>
                                <td>Tên sản phẩm</td>
                                <td>Giá sản phẩm</td>
                                <td>Số lượng</td>
                                <td colspan="2">Thành tiền</td>
                            </tr>
                        </thead>
                        <tbody>




                            <?php
                                foreach ($list_buy as $item) {
                                ?>

                            <tr>

                                <td><?php echo $item['code']; ?></td>

                                <td>
                                    <a href="<?php echo $item['url']; ?>" title=" " class="thumb">
                                        <img src="<?php echo $item['product_thumb']; ?>" alt="">
                                    </a>
                                </td>

                                <td>
                                    <a href="<?php echo $item['url']; ?>" title="<?php echo $item['product_title']; ?>"
                                        class="name-product"><?php echo $item['product_title']; ?></a>
                                </td>

                                <td><?php echo currency_format($item['price']); ?></td>

                                <!-- Lấy số luog cập nhat -->
                                <!-- Giả sử có 2 sản phẩm có ID là 2 và 5, khi người dùng chỉnh số lượng và bấm "Cập nhật giỏ hàng", trình duyệt sẽ gửi mảng qty như sau:

                                $_POST['qty'] = array(
                                2 => 3, // sản phẩm ID=2, số lượng người dùng chọn là 3
                                5 => 1, // sản phẩm ID=5, số lượng người dùng chọn là 1
                            ); -->
                                <td>
                                    <input type="number" min="1" max="10" name="qty[<?php echo $item['id'] ?>]"
                                        value="<?php echo $item['qty']; ?>" class="num-order">
                                </td>

                                <td><?php echo currency_format($item['sub_total']); ?></td>

                                <td>
                                    <a href="<?php echo $item['url_delete_cart'] ?>" title="Xóa sản phẩm"
                                        class="del-product"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>

                            <?php } ?>




                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <div class="clearfix">
                                        <p id="total-price" class="fl-right">Tổng giá:
                                            <span><?php echo currency_format(get_total_cart()); ?></span>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <div class="clearfix">
                                        <div class="fl-right">

                                            <input type="submit" id="update-cart" name="btn_update_cart"
                                                value="Cap nhat gio hang">

                                            <a href="?mod=cart&act=checkout" title="" id="checkout-cart">Thanh toán</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>

                </form>

            </div>
        </div>
        <div class="section" id="action-cart-wp">
            <div class="section-detail">
                <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng
                    <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.
                </p>
                <a href="?page=home" title="" id="buy-more">Mua tiếp</a><br />
                <a href="?mod=cart&act=delete_all" title="" id="delete-cart">Xóa giỏ hàng</a>
            </div>
        </div>


        <?php
        } else {
            echo "<p>Hiện tại giỏ hàng của bạn chưa có sản phẩm nào.</p>";
        ?>

        <?php
        }
        ?>

    </div>
</div>