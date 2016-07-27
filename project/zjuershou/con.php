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


$begin=$_GET['begin'];
//$end=$_GET['end'];
//if($_GET['search']!="adsads") {
   $search=$_GET['search'];
    $str1="select * from booklist where bookname like \"%$search%\" ORDER BY tag ASC , time DESC limit $begin,5";
//}
//else{
//    $str1 = "select * from booklist ORDER BY tag ASC , time DESC limit $begin,2";
//}
mysql_query("SET NAMES 'utf8';");
$result=mysql_query($str1);
$number=mysql_num_rows($result);
$results=array();
for($i=0;$i<$number;$i++) {
    $temp = mysql_fetch_array($result);
    $results[$i]=$temp;
}
$results=json_encode($results);
//print_r($results);

echo $results;