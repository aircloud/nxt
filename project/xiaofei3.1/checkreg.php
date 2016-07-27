<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 6/10/15
 * Time: 7:00 PM
 */
session_start();
require_once("config.php");
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
$name=$_POST['name'];

$str="select * from user WHERE name='$name'";
mysql_query("SET NAMES 'utf8';");
$result=mysql_query($str);
$number=mysql_num_rows($result);

if($number==0){
    echo "yes";
}
else {
    echo "no";
}