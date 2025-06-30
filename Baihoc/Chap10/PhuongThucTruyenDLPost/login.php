<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";
$username = $_POST['username'];
$password = $_POST['password'];
echo $username.'----'.$password;
?>