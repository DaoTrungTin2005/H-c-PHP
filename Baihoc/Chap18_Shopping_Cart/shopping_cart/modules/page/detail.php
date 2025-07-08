<?php
// Get id từ url
$id = (int) $_GET['id'] ;
// echo $id;

//Xây dựng hàm (tham số truyền vào là id)
$item = get_page_by_id($id);
// show_array($item);

?>
<div id="main-content-wp" class="detail-news-page">
    <div class="wp-inner clearfix">
        <div id="sidebar" class="fl-left">
            <?php get_sidebar(); ?>
            <div id="content" class="fl-right">
                <div class="section" id="detail-news-wp">
                    <div class="section-head">
                        <h3 class="section-title"><?php echo $item['page_title']; ?></h3>
                    </div>
                    <div class="section-detail">
                        <p class="create-date"><?php echo $item['created_at']; ?></p>
                        <div class="content-news">
                            <?php echo $item['page_content']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>