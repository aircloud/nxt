<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 6/11/15
 * Time: 3:54 PM
 */
session_start();
//$_SESSION['name']='';
session_unset();
session_destroy();

echo "<script language=\"JavaScript\">\r\n";
echo " location.assign(\"index.php\");\r\n";
echo "</script>";