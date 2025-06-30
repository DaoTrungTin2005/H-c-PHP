<?php 
#Duyệt mảng 1 chiều 
$list_prime = array(2,3,5,7);

$t = 0 ; 
foreach($list_prime as $item){
    echo $item."<br>" ;
    $t += $item ;
}

echo "kq : {$t}";
echo "<br>";

foreach($list_prime as $key => $item){
    echo "$key => $item.<br>" ;

}
echo "<br>--------------------<br>";
//=========================
// Duyet mảng đa chiểu
$listUser = array(
    1 => array('id' => 1, 'fullName' => 'Tín', 'age' => 30),
    2 => array('id' => 2, 'fullName' => 'Thuận', 'age' => 35),
);

    echo "<pre>";
    print_r($listUser);
    echo "<pre>";

foreach($listUser as $item){
    echo "<pre>";
    print_r($item);
    echo "<pre>";
}

foreach($listUser as $item){
    echo $item['id'];
    echo $item['fullName'];
    echo $item['age'];
    echo "<br>--------------------<br>";
}
?>