<?php
/**
 * Created by PhpStorm.
 * User: HuRuiFeng
 * Date: 2018/7/19 0019
 * Time: 上午 11:13
 */

/**
 * Class Math
 * 1.使用Per-Class常量
 * 2.实现静态方法
 */
class Math {
    const pi = 3.14159;
    static function squared($input){
        return $input * $input;
    }
}

echo " Math::pi = ".Math::pi."\n";
echo Math::squared(8);

/**
 * Class A
 * 延迟静态绑定
 */
class A {
    public static function who(){
        echo __CLASS__;
    }
    public static function test(){
        static::who();
    }
}

class B extends A {
    public static function who(){
        echo __CLASS__;
    }
}

B::test();

/**
 * Class myClass
 * 实现迭代器和迭代
 */
class myClass {
    public $a = '5';
    public $b = '7';
    public $c = '9';
}

$x = new myClass();
foreach ($x as $attribute){
    echo $attribute.'<br />';
}
?>