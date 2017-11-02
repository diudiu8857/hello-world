<?php

/**
 * Created by PhpStorm.
 * User: B102
 * Date: 2017/11/2
 * Time: 11:07
 */
class Man
{
    var $name;
    var $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function sayMyinfor()
    {
        echo "<br>";
        echo "我的名字是：$this->name,我$this->age 岁了！";

    }
}