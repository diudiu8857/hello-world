<?php
/**
 * Created by PhpStorm.
 * User: B102
 * Date: 2017/11/2
 * Time: 10:02
 */
require 'Man.php';
//输出
echo "hello world";

//定义变量
$a = 10;
$b = 20;
echo($a + $b);
//定义常量
const value = 20;
echo value;
//定义函数
function add($a, $b)
{
    $c = $a + $b;
    echo("$a+$b=$c");
    echo($a + $b);
}

echo("<br>");
add(1, 2);
echo "ok";
//分支
function Hege($a)
{
    $result = "合格";
    switch (intval($a / 10)) {
        case 10:
        case 9:
            $result = "优秀";
            break;
        case 8:
            $result = "良好";
            break;
        case 7:
        case 6:
            $result = "及格";
            break;
        default:
            $result = "不及格";
    }
    return $result;
}
echo("<br>");
echo Hege(85);
//类
class person{
    var $name;
    var $sex;
    public function sayHello(){
        echo"<br>我是：$this->name <br>你好，世界";
    }

}
$p=new person();
$p->name="张三";
$p->sayHello();
echo"<br>";
$a =new Man("杜甫",2);
$a->sayMyinfor();
$a->age=3;
$a->name="李白";
$a->sayMyinfor();
//时间
echo "<br/>";
echo date('Y-m-d h:m:s');
//json
echo "<br>";
$arr=array(1,2,3,4,5,6,'hello');
echo  json_encode($arr);
$json=json_encode($a);

echo $json;
echo "<br>";
$json2=json_decode($json);
echo $json2->name;
echo "<br>";
//session
session_start();
$_SESSION['userID']="zhangsan";

echo $_SESSION['userID'];
session_destroy();
session_unset();
echo $_SESSION['userID'];





















