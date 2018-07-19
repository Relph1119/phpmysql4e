<?php

function create_table($data)
{
  echo '<table border="1" style="border-collapse:collapse;">';
  reset($data); // Remember this is used to point to the beginning
  $value = current($data);
  while ($value)
  {
     echo "<tr><td>$value</td></tr>\n";
     $value = next($data);
  }
  echo '</table>';
}

function create_table2($data, $header=NULL, $caption=NULL ) {
    echo '<table border="1" style="border-collapse:collapse;">';
    if($caption){
        echo "<caption>$caption</caption>";
    }
    if ($header){
        echo "<tr><th>$header</th></tr>";
    }
    reset($data);
    $value = current($data);
    while ($value){
        echo "<tr><td>$value</td></tr>";
        $value = next($data);
    }
    echo "</table>";
}

$my_data = ['First piece of data', 'Second piece of data', 'And the third'];
create_table($my_data);

$my_header = 'Data';
$my_caption = 'Data about something';
create_table2($my_data, $my_header, $my_caption);

?>
