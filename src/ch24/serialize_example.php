<?php
/**
 * Created by PhpStorm.
 * User: Hurf
 * Date: 2018/7/31
 * Time: 23:17
 */

class employee {
    var $name;
    var $employee_id;
}

$this_emp = new employee;
$this_emp->name = 'Fred';
$this_emp->employee_id = 5324;

echo $serial_emp = serialize($this_emp);
?>