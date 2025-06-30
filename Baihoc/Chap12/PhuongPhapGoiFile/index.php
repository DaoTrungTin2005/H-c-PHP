<?php
require 'lib/data.php';
require 'lib/template.php';

// làm hàm gọi cái header ra
get_header();
?>

<div id="content">
    HOME
    <?php
    $data = array(1, 2, 3);
    show_data($data);
    ?>
</div>

<?php
require 'inc/footer.php';
?>