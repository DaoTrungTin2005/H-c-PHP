<?php

// tính tổng cá số cẵn từ 0 -> 10
$t = 0 ;
for($i = 0; $i <= 10 ; $i++){
     
    if ($i % 2 == 0){
        
        $t += $i ; 
        echo $t."<br>" ;
        
    }
}
echo "kq : {$t}"
?>