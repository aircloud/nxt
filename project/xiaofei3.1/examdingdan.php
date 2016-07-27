<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 6/14/15
 * Time: 2:57 PM
 */

session_start();
$print=$_POST["print"];//是一个数组

$source=array(
    "1001"=>"复习ppt黑白版[0.54元]",
    "1002"=>"复习ppt彩色版[4.8元]",
);

for ($i=0;$i<count($print);$i++){
    echo $source[$print[$i]]."<br/>";
}

?>

