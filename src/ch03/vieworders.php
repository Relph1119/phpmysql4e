<?php
//create short variable name
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

$orders = file(str_replace( '\\' , '/' , realpath(dirname(__FILE__).'/../../'))."/orders/orders.txt");

$number_of_orders = count($orders);
if ($number_of_orders == 0) {
  echo "<p><strong>No orders pending.</br>
       Please try again later.</strong></p>";
}

for ($i=0; $i<$number_of_orders; $i++) {
  echo $orders[$i]."<br />";
}
?>
