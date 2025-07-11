<?php
$id = (int)$_GET['id'];

// $sql = "DELETE FROM tbl_user WHERE id = {$id}" ;
// if(mysqli_query($conn, $sql)){
//     echo "Đã xóa thành công";
//     redirect("?mod=users&act=main");
// }

db_delete('tbl_user', "id = {$id}");
redirect("?mod=users&act=main");
