<?php
/**
 * Created by PhpStorm.
 * User: hh
 * Date: 22/7/2016
 * Time: 7:31 PM
 */

header('Content-type:application/json;chatset:utf-8');
header('Cache-Control:max-age=0');

$random = rand(1,999);

$i=0;

while($i<9) {

    sleep(1);

    $json = array('test' => 'this is a test', 'data' => '这是一个测试文件','3'=>rand(1,100));

    echo json_encode($json);

    ob_flush();
    flush();
    exit();

//    $i++;

}