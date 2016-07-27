<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 6/11/15
 * Time: 3:00 PM
 */

$lifeTime = 6000*24;
session_set_cookie_params($lifeTime);
session_start();
require_once("config.php");
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);


$name=$_POST['name'];
$password=md5($_POST['password']);
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];

if($name==''){
    echo "<script language=\"JavaScript\">\r\n";
    echo " alert(\"注册失败，请重新数据和浏览器配置。\");\r\n";
    echo " location.assign(\"register.php\");\r\n";
    echo "</script>";
}

else {
    $_SESSION['name'] = $name;

    $str = "insert into user (name,password,phone,address,email) VALUES ('$name','$password','$phone','$address','$email')";
    mysql_query("SET NAMES 'utf8';");
    mysql_query($str);

    echo "<script language=\"JavaScript\">\r\n";
    echo " location.assign(\"main.php\");\r\n";
    echo "</script>";
}