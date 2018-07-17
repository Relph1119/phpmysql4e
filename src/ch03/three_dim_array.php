<?php
/**
 * Created by PhpStorm.
 * User: HuRuiFeng
 * Date: 2018/7/17 0017
 * Time: 上午 11:06
 */

$categories = array( array( array( 'CAR_TIR', 'Tires', 100),
                              array( 'CAR_OIL', 'Oil', 10),
                              array( 'CAR_SPK', 'Speak Plugs', 4)),
                      array( array( 'VAN_TIR', 'Tires', 120),
                              array( 'VAN_OIL', 'Oil', 12),
                              array( 'VAN_SPK', 'Speak Plugs', 5)),
                      array( array( 'TRK_TIR', 'Tires', 150),
                              array( 'TRK_OIL', 'Oil', 15),
                              array( 'TRK_SPK', 'Speak Plugs', 6)));

for( $layer = 0; $layer < 3; $layer++){
    echo "Layer $layer<br />";
    for ($row = 0; $row < 3; $row++){
        for ($column = 0; $column < 3; $column++){
            echo '|'.$categories[$layer][$row][$column];
        }
        echo '|<br />';
    }
}


?>