<?php
/**
 * Created by PhpStorm.
 * User: HuRuiFeng
 * Date: 2018/7/19 0019
 * Time: 上午 9:34
 */

class classname
{
    /**
     * classname constructor.
     */
    public function __construct($param)
    {
        echo "Constructor called with parameter ".$param."<br />";
    }

    public $attribute;
    function operation($param){
        $this->attribute = $param;
        echo $this->attribute;
    }

    /**
     * @return mixed
     */
    public function __get($name)
    {
        return $this->$name;
    }

    /**
     * @param mixed $attribute
     */
    public function __set($name, $value)
    {
        if ( ($name="attribute") && ($value >= 0) && ($value <= 100))
            $this->attribute = $value;
    }

}

$a = new classname("First");
$b = new classname("Second");
$c = new classname();

?>