<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 6/12/15
 * Time: 12:44 AM
 */
session_start();
$result=$_SESSION['check_pic_num'];
$ecode=$_POST['ecode'];
$a=array('test'=>'yes');
$b=array('test'=>'no');
if($result==$ecode){
    echo "yes";
}
else{
    echo "no";
}
