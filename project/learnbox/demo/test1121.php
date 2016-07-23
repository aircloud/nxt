<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 11/21/15
 * Time: 10:48 AM
 */


require '../libs/Smarty.class.php';

$smarty = new Smarty;



$test="1121";

$smarty->assign("test",$test);
$smarty->display("test1121.html");