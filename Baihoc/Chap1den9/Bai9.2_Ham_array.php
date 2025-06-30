<?php
$search_array = array('a' => 1, 'second' => 4);
if (array_key_exists('a', $search_array)) {
echo "The 'a' element is in the array"; }

//==================================
$array_1 = array(1,2);
$array_2 = array(2,5);
$result = array_merge($array_1, $array_2);
echo "<pre>";
print_r($result);
echo "</pre>";

//=====================================
$array_3 = array(1,2,5,8);
echo count($array_3);
echo "<br>";

//=====================================
$array_4 = array(1,2,5,8,10,9999);
echo in_array(9999, $array_4);
echo "<br>";

//=====================================
$array_5 = array(1,2,5,8,10,9999);
echo is_array( $array_5);
echo "<br>";
?>