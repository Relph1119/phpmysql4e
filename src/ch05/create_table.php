<?php

function create_table($data)
{
  echo '<table border = "1">';
  reset($data); // Remember this is used to point to the beginning
  $value = current($data);
  while ($value)
  {
     echo "<tr><td>$value</td></tr>\n";
     $value = next($data);
  }
  echo '</table>';
}

function create_table2($data, $border=1, $cellpadding=4, $cellspacing=4 ) {
    echo "<table border='".$border."' cellpadding='".$cellpadding
        ."' cellspacing='".$cellspacing."'>";
    reset($data);
    $value = current($data);
    while ($value) {
        echo "<tr><td>".$value."</td></tr>";
        $value = next($data);
    }
    echo "</table>";
}

$my_array = array('Line one.','Line two.','Line three.');
create_table($my_array);
create_table2($my_array, 3, 8, 8);

?>
