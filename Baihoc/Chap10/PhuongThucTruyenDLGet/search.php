<?php
function show_array($data){
    if (is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
}
}

show_array($_GET);

$q = $_GET['q'];
echo $q;
?>