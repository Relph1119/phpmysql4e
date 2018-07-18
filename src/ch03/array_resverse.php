<?php
/**
 * Created by PhpStorm.
 * User: HuRuiFeng
 * Date: 2018/7/18 0018
 * Time: 上午 11:49
 */

$array = array(1, 2, 3);
$value = end($array);
while ($value) {
    echo "$value<br />";
    $value = prev($array);
}

function my_point ($value){
    echo "$value<br />";
}
array_walk($array, 'my_point');

function my_multiply(&$value, $key, $factor) {
    $value *= $factor;
    echo "$value<br />";
}

array_walk($array, 'my_multiply', 3);

$array = array(4, 5, 1, 2, 3, 1, 2, 1);
$ac = array_count_values($array);

print_r($ac);
echo "<br/>";

$array = array( 'key1'=>'value1', 'key2'=>'value2', 'key3'=>'value3');
extract($array);
echo "$key1 $key2 $key3";

?>