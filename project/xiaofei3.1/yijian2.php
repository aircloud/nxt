<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 6/12/15
 * Time: 1:31 PM
 */
session_start();
require_once("config.php");
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);

$name=$_SESSION['name'];
$comment=$_POST['knowledge'];

$str="insert into comment (name,comment) VALUES ('$name','$comment')";
mysql_query("SET NAMES 'utf8';");
mysql_query($str);

echo "<script language=\"JavaScript\">\r\n";
echo " location.assign(\"close.php\");\r\n";
echo "</script>";