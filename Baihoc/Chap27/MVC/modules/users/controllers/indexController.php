<?php

// Tiêu chí	autoload.php	construct() trong controller
// Chạy khi nào?	Khi hệ thống khởi động lần đầu (index.php)	         Khi mỗi controller được gọi
// Dùng để làm gì?	Load các thư viện/helper chung cho toàn bộ hệ thống	    Load riêng những thứ cần cho controller hiện tại
// Có tự động gọi không?	✅ Có, được gọi trong appload.php	         ✅ Có, được gọi trong router.php
// Có thay thế nhau được không?	❌ Không nên	                             ❌ Không nên

function construct()
{
    //    echo "DÙng chung, load đầu tiên";
    load_model('index');
}

function indexAction()
{
    load('helper', 'format');
    $list_users = get_list_users();
    // show_array($list_users);
    $data['list_users'] = $list_users;
    load_view('index', $data);
}

function addAction()
{
    echo "Thêm dữ liệu";
}

function editAction()
{
    $id = (int)$_GET['id'];
    $item = get_user_by_id($id);
    show_array($item);
}