<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 11/21/15
 * Time: 6:56 PM
 */

require_once "functions.php";


$zhiku="http://wiki.mbalib.com/wiki/人机交互";
header("Content-type: text/html; charset=utf-8");

$result=fcontents($zhiku,"");



echo $result;