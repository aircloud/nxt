<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 11/21/15
 * Time: 8:09 PM
 */


header("Content-type: text/html; charset=utf-8");



require '../libs/Smarty.class.php';
include_once "functions.php";
$smarty->debugging = true;
$smarty->caching = false;

$smarty = new Smarty;

$smarty->display("CoursesSearch/index.html");