<?php
/**
 * Created by PhpStorm.
 * User: Hurf
 * Date: 2018/7/19
 * Time: 21:38
 */

function fizzbuzz ($start, $end) {
    $current = $start;
    while ($current <= $end) {
        if ($current%3 == 0 && $current%5 ==0) {
            yield "fizzbuzz";
        } else if ($current%3 == 0) {
            yield "fizz";
        } else if ($current%5 == 0) {
            yield "buzz";
        } else {
            yield $current;
        }
        $current++;
    }
}

foreach (fizzbuzz(1, 20) as $number) {
    echo $number.'<br />';
}

?>