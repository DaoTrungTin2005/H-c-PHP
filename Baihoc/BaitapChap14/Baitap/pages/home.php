<?php


$sent_to_email = "trungtin07012005@gmail.com";
$sent_to_fullname = "Tín heo";
$subject = "Đăng kí thành công rồi nhoa";
$content = "successsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss";
$option = array();

$result = send_mail($sent_to_email, $sent_to_fullname, $subject, $content, $config_email);
if ($result === true) {
    echo "✅ Gửi mail thành công";
} else {
    echo "❌ Lỗi: $result";
} ?>

<div id="content">
    <h1>Trang chủ</h1>
</div>