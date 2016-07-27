<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 6/11/15
 * Time: 1:18 PM
 */
$lifeTime = 6000*24;
session_set_cookie_params($lifeTime);
session_start();
require_once("config.php");
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);

