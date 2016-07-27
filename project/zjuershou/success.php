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


?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta name="viewport" content="width=divice-width,initial-scale=0.85,user-scalable=no,maximum-scale=0.85">

    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/jquery.mobile-1.4.5.min.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        #bookhead{
            background-color: rgba(255,69,0,0);
            height: auto;
        }

        #search{
            width: 60%;
            border-radius: 0;
            background-color: white;
            float: left;
            min-height: 40px;
            border: none;
        }

        #searchbutton{
            float: left;
            background-color: #44FC05;
            width: 40%;
            text-align: center;
            font-size: 24px;
            min-height: 40px;
            border: none;
            color: white;
        }
    </style>
</head>
<body>
<BR/><BR/>
<div class="container">
    <?PHP
    $id=$_GET['id'];
    $str1="select * from booklist where id='$id'";
    mysql_query("SET NAMES 'utf8';");
    $str2="update booklist set tag=1 where id='$id'";
    $result=mysql_query($str1);
    mysql_query($str2);
    $number=mysql_num_rows($result);
    $temp=mysql_fetch_array($result);

    ?>

    <div class="panel" style="overflow:hidden;clear:both;margin: 20px;text-align: center;color:blue;line-height: 140%;">
        <H3 style="line-height: 120%;margin: 20px 10px;">您的商品购买记录已经生效！</H3>
        <H3 style="line-height: 120%;margin: 20px 10px;">请自行电话联系<?PHP echo $temp['phone'] ?></H3>
    </div>
    <DIV STYLE="text-align: center">
        <A href="index.php" style="text-align: center">返回首页</A>
    </DIV>
</div>


<div data-role="footer" data-position="fixed" id="bookfoot">
    <h1>版权所有:优澄文化 浙ICP备15000598</h1>
</div>
</body>
</html>