<?php
/**
 * Created by PhpStorm.
 * User: HuRuiFeng
 * Date: 2018/7/17 0017
 * Time: 上午 10:38
 */
$products = array( array( 'TIR', 'Tires', 100),
                    array( 'OIL', 'Oil', 10),
                    array( 'SPK', 'Spark Plugs', 4));
echo '显式数组展示<br />';
echo '|'.$products[0][0].'|'.$products[0][1].'|'.$products[0][2].'|<br />';
echo '|'.$products[1][0].'|'.$products[1][1].'|'.$products[1][2].'|<br />';
echo '|'.$products[2][0].'|'.$products[2][1].'|'.$products[2][2].'|<br />';
echo "<br/>";

echo '两层For循环展示<br />';
for ($row = 0; $row < 3; $row++){
    for ($colume = 0; $colume < 3; $colume++){
        echo '|'.$products[$row][$colume];
    }
    echo '|<br />';
}
echo "<br/>";

$products = array( array( 'Code'=> 'TIR',
                        'Description' => 'Tires',
                        'Price' => 100),
                    array( 'Code'=> 'OIL',
                        'Description' => 'Oil',
                        'Price' => 10),
                    array( 'Code'=> 'SPK',
                        'Description' => 'Spark Plugs',
                        'Price' => 4));
echo '单层For循环展示<br />';
for ($row = 0; $row < 3; $row++){
    echo '|'.$products[$row]['Code'].'|'.$products[$row]['Description'].'|'.$products[$row]['Price'].'<br />';
}
echo "<br/>";

echo 'while循环展示<br />';
for ($row = 0; $row < 3; $row++){
    while(list($key, $value) = each( $products[$row])){
        echo "|$value";
    }
    echo '|<br />';
}
echo "<br/>";
?>
