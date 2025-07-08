<?php
// Lấy cat_id từ URL (ví dụ cat_id=2) để biết đang xem danh mục nào.
// Ép kiểu về số nguyên để tránh lỗi và bảo mật.

echo "<br>";
$cat_id = (int)$_GET['cat_id'];
echo "cat_id =" . $cat_id;


?>
<div id="main-content-wp" class="category-product-page">
    <div class="wp-inner clearfix">
        <div id="sidebar" class="fl-left">
            <?php get_sidebar(); ?>
            <div id="content" class="fl-right">
                <div class="section list-cat">
                    <div class="section-head">
                        <h3 class="section-title">Laptop</h3>
                        <p class="section-desc">Có 20 sản phẩm trong mục này</p>
                    </div>
                    <div class="section-detail">
                        <ul class="list-item clearfix">
                            <li>
                                <a href="?mod=product&act=detail&id=1" title="" class="thumb">
                                    <img src="public/images/img-product.png" alt="">
                                </a>
                                <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                <p class="price">5.000.000đ</p>
                            </li>
                            <li>
                                <a href="?page=detail_product" title="" class="thumb">
                                    <img src="public/images/img-product.png" alt="">
                                </a>
                                <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                <p class="price">5.000.000đ</p>
                            </li>
                            <li>
                                <a href="?page=detail_product" title="" class="thumb">
                                    <img src="public/images/img-product.png" alt="">
                                </a>
                                <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                <p class="price">5.000.000đ</p>
                            </li>
                            <li>
                                <a href="?page=detail_product" title="" class="thumb">
                                    <img src="public/images/img-product.png" alt="">
                                </a>
                                <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                <p class="price">5.000.000đ</p>
                            </li>
                            <li>
                                <a href="?page=detail_product" title="" class="thumb">
                                    <img src="public/images/img-product.png" alt="">
                                </a>
                                <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                <p class="price">5.000.000đ</p>
                            </li>
                            <li>
                                <a href="?page=detail_product" title="" class="thumb">
                                    <img src="public/images/img-product.png" alt="">
                                </a>
                                <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                <p class="price">5.000.000đ</p>
                            </li>
                            <li>
                                <a href="?page=detail_product" title="" class="thumb">
                                    <img src="public/images/img-product.png" alt="">
                                </a>
                                <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                <p class="price">5.000.000đ</p>
                            </li>
                            <li>
                                <a href="?page=detail_product" title="" class="thumb">
                                    <img src="public/images/img-product.png" alt="">
                                </a>
                                <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                <p class="price">5.000.000đ</p>
                            </li>
                            <li>
                                <a href="?page=detail_product" title="" class="thumb">
                                    <img src="public/images/img-product.png" alt="">
                                </a>
                                <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                <p class="price">5.000.000đ</p>
                            </li>
                            <li>
                                <a href="?page=detail_product" title="" class="thumb">
                                    <img src="public/images/img-product.png" alt="">
                                </a>
                                <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                <p class="price">5.000.000đ</p>
                            </li>
                            <li>
                                <a href="?page=detail_product" title="" class="thumb">
                                    <img src="public/images/img-product.png" alt="">
                                </a>
                                <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                <p class="price">5.000.000đ</p>
                            </li>
                            <li>
                                <a href="?page=detail_product" title="" class="thumb">
                                    <img src="public/images/img-product.png" alt="">
                                </a>
                                <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                <p class="price">5.000.000đ</p>
                            </li>
                            <li>
                                <a href="?page=detail_product" title="" class="thumb">
                                    <img src="public/images/img-product.png" alt="">
                                </a>
                                <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                <p class="price">5.000.000đ</p>
                            </li>
                            <li>
                                <a href="?page=detail_product" title="" class="thumb">
                                    <img src="public/images/img-product.png" alt="">
                                </a>
                                <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                <p class="price">5.000.000đ</p>
                            </li>
                            <li>
                                <a href="?page=detail_product" title="" class="thumb">
                                    <img src="public/images/img-product.png" alt="">
                                </a>
                                <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                <p class="price">5.000.000đ</p>
                            </li>
                            <li>
                                <a href="?page=detail_product" title="" class="thumb">
                                    <img src="public/images/img-product.png" alt="">
                                </a>
                                <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                <p class="price">5.000.000đ</p>
                            </li>
                            <li>
                                <a href="?page=detail_product" title="" class="thumb">
                                    <img src="public/images/img-product.png" alt="">
                                </a>
                                <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                <p class="price">5.000.000đ</p>
                            </li>
                            <li>
                                <a href="?page=detail_product" title="" class="thumb">
                                    <img src="public/images/img-product.png" alt="">
                                </a>
                                <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                <p class="price">5.000.000đ</p>
                            </li>
                            <li>
                                <a href="?page=detail_product" title="" class="thumb">
                                    <img src="public/images/img-product.png" alt="">
                                </a>
                                <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                <p class="price">5.000.000đ</p>
                            </li>
                            <li>
                                <a href="?page=detail_product" title="" class="thumb">
                                    <img src="public/images/img-product.png" alt="">
                                </a>
                                <a href="?page=detail_product" title="" class="title">Lenovo IdeaPad 100S</a>
                                <p class="price">5.000.000đ</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="section" id="pagenavi-wp">
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
                </div>
            </div>
        </div>
    </div>