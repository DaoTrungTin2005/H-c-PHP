<?php
// Lấy cat_id từ URL (ví dụ cat_id=2) để biết đang xem danh mục nào.
// Ép kiểu về số nguyên để tránh lỗi và bảo mật.

echo "<br>";
$cat_id = (int)$_GET['cat_id'];
echo "cat_id =" . $cat_id;
?>

<?php
// Lấy thông tin của danh mục
$info_cat = get_info_cat($cat_id);
show_array($info_cat);

// Lấy danh sách bài viết
$list_item = get_list_product_by_cat_id($cat_id);
show_array($list_item);

// test format tiền
echo "Format tiền: " . currency_format(1000000, 'USD');
?>
<div id="main-content-wp" class="category-product-page">
    <div class="wp-inner clearfix">
        <div id="sidebar" class="fl-left">
            <?php get_sidebar(); ?>
            <div id="content" class="fl-right">
                <div class="section list-cat">
                    <div class="section-head">
                        <h3 class="section-title"><?php echo $info_cat['cat_title']; ?></h3>
                        <p class="section-desc">Có 20 sản phẩm trong mục này</p>
                    </div>
                    <div class="section-detail">
                        <?php 
                            if(!empty($list_item)) {
                        ?>
                        <ul class="list-item clearfix">
                            <?php foreach($list_item as $item) { ?>
                            <li>
                                <a href="<?php echo $item['url']; ?>" title="" class="thumb">
                                    <img src="<?php echo $item['product_thumb']; ?>" alt="">
                                </a>
                                <a href="<?php echo $item['url']; ?>" title=""
                                    class="title"><?php echo $item['product_title']; ?></a>
                                <p class="price"><?php echo  currency_format($item['price'], 'đ'); ?></p>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </div>
                </div>
                <!-- <div class="section" id="pagenavi-wp">
                    <div class="section-detail">
                        <ul id="list-pagenavi">
                            <li class="active">
                                <a href="" title="">1</a>
                            </li>
                            <li>
                                <a href="" title="">2</a>
                            </li>
                            <li>
                                <a href="" title="">3</a>
                            </li>
                        </ul>
                        <a href="" title="" class="next-page"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>