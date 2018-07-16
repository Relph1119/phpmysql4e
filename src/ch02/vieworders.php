<?php
  //create short variable name
  $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
<html>
<head>
  <title>Bob's Auto Parts - Customer Orders</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Customer Orders</h2>
<?php

   @$fp = fopen("$DOCUMENT_ROOT/../orders/orders.txt", 'rb');
   flock($fp, LOCK_SH);
   if (!$fp) {
     echo "<p><strong>No orders pending.
           Please try again later.</strong></p>";
     exit;
   }

   while (!feof($fp)) {
      $order= fgets($fp, 999);
      echo $order."<br />";
   }

   echo "Final position of the file pointer is ".(ftell($fp));
   echo "<br />";
   rewind($fp);
   echo "After rewind, the position is ".(ftell($fp));
   echo "<br />";
   flock($fp, LOCK_UN);
   fclose($fp);

?>
</body>
</html>
