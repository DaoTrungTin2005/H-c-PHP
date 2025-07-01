<?php
// // nhúng xài hàm show_array()
// require 'lib/data.php';

    // //Nhúng dữ liệu mẫu vô
    // require 'data/post.php';

    
    // show dữ liệu mẫu vô thử 
show_array($list_post);
?>

<div id="content">
    <h1>Tin tức</h1>

    <?php
        if(!empty($list_post)){

    ?>
    <ul class="list_post">

        <?php
        foreach($list_post as $item){
        ?>

        <li>
            <a href="" class="post-title">
                <?php echo $item['post-title']?>
            </a>
            <p class="post-desc">
                <?php echo $item['post-desc']?>
            </p>
        </li>

        <?php
        }
        ?>

    </ul>

    <?php
        }
    ?>

</div>