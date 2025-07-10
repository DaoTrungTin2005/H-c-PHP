<?php
#Ket nối database
$conn = mysqli_connect('localhost', 'root', 'trungtin07012005', 'hoc_php', 3306);
if (!$conn) {
    echo "ko thanh cong" . mysqli_connect_error();
    die();
} else echo "Thanh cong";

?>