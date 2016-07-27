<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 6/28/15
 * Time: 5:41 PM
 */
session_start();
$username=$_SESSION['name'];
$print=$_POST['print'];//单面还是双面
$method=$_POST['method'];//自取还是不自取
$color=$_POST['color'];//彩色还是黑白
$phone=$_POST['phone'];//电话确认
$address=$_POST['address'];//地址确认
$number=$_POST['number'];//份数确认
$banshu=$_POST['banshu'];


echo $username.$print.$method.$color.$address.$number.$banshu;