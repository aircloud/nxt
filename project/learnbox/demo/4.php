<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 11/21/15
 * Time: 5:33 PM
 */

require_once "functions.php";
header("Content-type: text/html; charset=utf-8");


$baidu="http://www.chuanke.com/course/_"."java"."_____.html";
$cookie="";
$baiduresult=fcontents($baidu,$cookie);
$baidureg="/ck-product-list.*?ul>/ism";
if(preg_match_all($baidureg, $baiduresult, $baidumatch)){
    $baiduecho=$baidumatch[0][0];
}else{
    $baiduecho="没有在百度教育找到关于的课程";
}

$baidu_allurl="/class=\"item-title\".*?href=\".*?\".target/ism";
preg_match_all($baidu_allurl,$baiduecho,$baidu_url);
$baidu_url[0]=cuta($baidu_url[0],59);
$baidu_url[0]=cutal($baidu_url[0],8);
//print_r($baidu_url[0]);

//echo $baiduecho;

$baidu_allimg="/img.src=\".*?jp.?g\"/ism";
preg_match_all($baidu_allimg,$baiduecho,$baidu_img);
$baidu_img[0]=cuta($baidu_img[0],9);
//$baidu_img[0]=cutal($baidu_img[0],1);
//print_r($baidu_img[0]);

$baidu_alltitle="/class=\"item-title\".*?\/div>/ism";
preg_match_all($baidu_alltitle,$baiduecho,$baidu_title);
$baidu_title[0]=cuta($baidu_title[0],45);
$baidu_title[0]=cutal($baidu_title[0],6);
//print_r($baidu_title[0]);

$baidu_allnumber="/class=\"number\".*?\/div/ism";
preg_match_all($baidu_allnumber,$baiduecho,$baidu_number);
$baidu_number[0]=cuta($baidu_number[0],56);
$baidu_number[0]=cutal($baidu_number[0],43);
//print_r($baidu_number[0]);

$baidu=array();
for($i=0;$i<count($baidu_url[0]);$i++){
    $baidu[$i]["url"]=$baidu_url[0][$i];
    $baidu[$i]["img"]=$baidu_img[0][$i];
    $baidu[$i]["number"]=$baidu_number[0][$i];
    $baidu[$i]["title"]=$baidu_title[0][$i];
}

print_r($baidu);