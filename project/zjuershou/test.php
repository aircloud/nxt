<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 8/1/15
 * Time: 7:18 PM
 */
session_start();

require_once("config.php");

$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
ini_set('date.timezone','Asia/Shanghai');


$sql="";
$result=mysql_query($sql);

