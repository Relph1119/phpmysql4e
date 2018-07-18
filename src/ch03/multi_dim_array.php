<?php
/**
 * Created by PhpStorm.
 * User: HuRuiFeng
 * Date: 2018/7/18 0018
 * Time: 上午 9:33
 */

$products = array( array( 'TIR', 'Tires', 100),
                    array( 'OIL', 'Oil', 10),
                    array( 'SPK', 'Spark Plugs', 4));

function compare1($x, $y) {
    if ($x[1] == $y[1]){
        return 0;
    } elseif ($x[1] < $y[1]){
        return -1;
    } else {
        return 1;
    }
}

function compare2($x, $y) {
    if ($x[2] == $y[2]){
        return 0;
    } elseif ($x[2] < $y[2]){
        return -1;
    } else {
        return 1;
    }
}

function reverse_compare($x, $y){
    if ($x[2] == $y[2]){
        return 0;
    } elseif ($x[2] < $y[2]){
        return 1;
    } else {
        return -1;
    }
}

usort($products, 'reverse_compare');
?>