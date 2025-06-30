<?php
$str1 = "Dao Trung Tin" ;
echo strlen($str1);
echo "...";

//======================
$str2 = "nguyen Ngoc huynh Nhu" ;
echo ucfirst($str2);
echo "...";

//=======================
$str3 = "cuc vang     nguyen Ngoc Huynh Nhu" ;
echo ucwords($str3);
echo "...";


//=======================
$str4 = "cuc vang     nguyen    Ngoc    Huynh    Nhu" ;
echo($str4);
echo "...";
echo trim($str4);
echo "...";

//=======================
echo str_repeat("--", 2);

//========================
// Mã hóa
$str5 = "Huynh Nhu" ;
echo md5($str5);
echo "...";

//========================
// từ mảng sinh ra cái chuỗi
// Cách 1
$list_id = array(1,3,5,7);
echo join(',', $list_id);
echo "...";

//======================
// Cách 2
$list_id2 = array(1,3,5,700);
echo implode(',', $list_id2);
echo "...";

//=======================
// Từ chuỗ tách thành từng phần từ theo " " roi cho vô mảng
$pizza = "cuc vang nguyen Ngoc Huynh Nhu" ;
$piece = explode(" ", $pizza);
echo "<pre>";
print_r($piece);
echo "</pre>";

echo $piece[4];
echo "...";

//=======================
#htmlspecialchars : thay đổi tính chất các thẻ html,...
echo "<a href='test'>Test</a>";
echo "...";
$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new;

?>