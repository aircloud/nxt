<?php
/**
 * Created by PhpStorm.
 * User: hh
 * Date: 22/7/2016
 * Time: 8:27 PM
 */


header('Content-Type:text/event-stream;charset:utf-8');
//header('Access-Control-Allow-Origin:http:localhost');
echo "data:现在是伦敦时间".date('H:i:s')."\r\n\r\n";
