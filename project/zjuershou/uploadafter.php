<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 8/1/15
 * Time: 7:18 PM
 */
session_start();

require_once("config.php");
@header("Content-type: text/html; charset=utf8");


$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
ini_set('date.timezone','Asia/Shanghai');

$bookname=$_POST['bookname'];
$edition=$_POST['edition'];
$address=$_POST['address'];
$explain=$_POST['explain'];
$phone=$_POST['phone'];
$ifsong=$_POST['ifsong'];
$price="价格：".$_POST['price'];

echo $_FILES["file"]["name"];

require_once("img.php");

if ($_FILES["file"]["error"] > 0)
{
    $error= "服务器暂忙，请稍后";
    echo $_FILES["file"]["error"]."这是文件的错误";
    $second='';
}
else
{
    $arr=explode(".",$_FILES["file"]["name"]);
    $total=count($arr);
    $final=$arr[$total-1];
    $up= "Upload: " . $_FILES["file"]["name"] . "<br />";
    $type= "Type: " . $_FILES["file"]["type"] . "<br />";
    $size= "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    $templujing= "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
    if (!is_dir('upload/'.$date.'/'))
        mkdir ('upload/'.$date.'/');
    $second="upload/".$date."/" ."mobile".$phone."-name:".time().".".$final;
    move_uploaded_file($_FILES["file"]["tmp_name"],
        $second);

    imagezoom($second, $second, 300, 400, '#FFFFFF');

    echo "Stored in: " .$second."size".$size;
//        echo "<a href=".$first.$second.">下载试试</a>";
}


$url=$second; //链接

$sql="insert into booklist (picture,bookname,edition,introduct,ifsong,address,price,phone) VALUES ('$url', '$bookname','$edition','$explain','$ifsong','$address','$price','$phone')";
mysql_query("SET NAMES 'utf8';");
mysql_query($sql);


echo "<script language=\"JavaScript\">\r\n";
echo " location.assign(\"index.php\");\r\n";
echo "</script>";


