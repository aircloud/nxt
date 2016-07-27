<?php
session_start();
require_once("config.php");
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 6/12/15
 * Time: 12:39 PM
 */

$id=$_GET['id'];

$str="update task set success=1 WHERE id=$id";
mysql_query($str);


echo "<script language=\"JavaScript\">\r\n";
echo " history.back(-1);\r\n";
echo "</script>";