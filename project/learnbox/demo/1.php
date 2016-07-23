<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 11/21/15
 * Time: 5:30 PM
 */

require_once "functions.php";header("Content-type: text/html; charset=utf-8");


$taobao="http://i.xue.taobao.com/list.htm?q=php";
$cookie="";
$taobaoresult=fcontents($taobao,$cookie);
$taobaoresult=safeEncoding($taobaoresult);
$taobaoreg="/<div class=\"courses\".*?>.*<div class=\"fan-say\"(.*?<\/div>){3}/ism";
if(preg_match_all($taobaoreg,$taobaoresult,$taobaomatch)){
    $taobaoecho=$taobaomatch[0][0];
    $taobaoecho=iconv("UTF-8", "GBK", $taobaoecho);
    $taobaoecho=safeEncoding($taobaoecho);
}
else{
    $taobaoecho="没有在淘宝教育找到关于"."的课程";
}

$taobao_allurl="/href=\".*?\"/ism";
preg_match_all($taobao_allurl,$taobaoecho,$taobao_url);
//print_r($taobao_url[0]);
$taobao_url_result=array();
for($i=0;$i<count($taobao_url[0]);$i=$i+4){
    $j=$i/4;
    $taobao_url_result[$j]=$taobao_url[0][$i];
}
print_r($taobao_url_result);


$taobao_allimg="/src=\".*?\"/ism";
preg_match_all($taobao_allimg,$taobaoecho,$taobao_img);
print_r($taobao_img[0]);


$taobao_alltitle="/<div class=\"name\".*?div>/ism";
preg_match_all($taobao_alltitle,$taobaoecho,$taobao_title);
//print_r($taobao_title[0]);
$taobao_title_r="";
for($i=0;$i<count($taobao_title[0]);$i++){
    $taobao_title_r=$taobao_title_r.$taobao_title[0][$i];
}
$taobao_alltitle2="/target=\"_blank\">.*?\/a>/ism";
preg_match_all($taobao_alltitle2,$taobao_title_r,$taobao_title2);
$taobao_title2[0]=cuta($taobao_title2[0],16);
$taobao_title2[0]=cutal($taobao_title2[0],4);
print_r($taobao_title2[0]);


$taobao_allnumber="/peo\".*?\/span>/ism";
preg_match_all($taobao_allnumber,$taobaoecho,$taobao_number);
$taobao_number[0]=cuta($taobao_number[0],10);
$taobao_number[0]=cutal($taobao_number[0],7);
for($i=0;$i<count($taobao_number[0]);$i++){
    $taobao_number[0][$i]=trim($taobao_number[0][$i]);
}
print_r($taobao_number[0]);

$taobao_allcontent="/fan-say\">.*?\/div>/ism";
preg_match_all($taobao_allcontent,$taobaoecho,$taobao_content);
$taobao_content[0]=cuta($taobao_content[0],15);
$taobao_content[0]=cutal($taobao_content[0],15);
for($i=0;$i<count($taobao_content[0]);$i++){
    $taobao_content[0][$i]=trim($taobao_content[0][$i]);
}
print_r($taobao_content[0]);
