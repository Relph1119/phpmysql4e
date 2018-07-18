<?php
/**
 * Created by PhpStorm.
 * User: HuRuiFeng
 * Date: 2018/7/18 0018
 * Time: 下午 1:52
 */

$test = 'Your customer service is excellent';
print_r(substr($test, 1)."<br />");
print_r(substr($test, -9)."<br />");
print_r(substr($test, 0 ,4)."<br />");
echo substr($test,5,-13);
echo "<br />";
echo strlen("hello");
echo "<br />";
$test = "Hello world ";
echo strpos($test, "o");
echo "<br />";
echo strpos($test, "o", 5);
echo "<br />";

$result = strpos($test, 'H');
if ($result === false){
    echo "Not found ";
} else {
    echo "Found at position ".$result;
}
echo "<br />";

$test = substr_replace($test, 'X', -1);
echo $test;

$address = "username@example.com";
$arr = preg_split("/\.|@/", $address);
while (list($key, $value) = each($arr)){
    echo "<br />".$value;
}

?>