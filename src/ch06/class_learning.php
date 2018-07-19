<?php
/**
 * Created by PhpStorm.
 * User: HuRuiFeng
 * Date: 2018/7/19 0019
 * Time: 上午 10:00
 */

class B extends A {
    public $attribute2;
    function operation2(){

    }
}

class A {
    public $attribute1;
    function operation1(){

    }
}

$b = new B();
$b->operation1();
$b->attribute1 = 10;
$b->operation2();
$b->attribute2 = 10;

?>