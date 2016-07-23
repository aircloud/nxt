<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 11/21/15
 * Time: 5:34 PM
 */
require_once "functions.php";
header("Content-type: text/html; charset=utf-8");



$youmi="http://v.youmi.cn/search/result?q=".$keyword;
$cookie="";
$youmiresult=fcontents($youmi,$cookie);
$youmireg="/<ul class=\"resultlist\".*?<\/ul>/ism";
if(preg_match_all($youmireg,$youmiresult,$youmimatch)){
    $youmiecho=$youmimatch[0][0];
}
else{
    $youmiecho=0;
}

$youmi_allachor="/class=\"img\".href=\".*?\"/ism";
preg_match_all($youmi_allachor,$youmiecho,$youmi_atag);
$youmi_atag[0]=cuta($youmi_atag[0],12);
print_r($youmi_atag[0]);




$youmi_allimg="/img.src=\".*?\"/ism";
preg_match_all($youmi_allimg,$youmiecho,$youmi_img);
$youmi_img[0]=cuta($youmi_img[0],5);
print_r($youmi_img[0]);

$youmi_alltitle="/alt=\".*?\"/ism";
preg_match_all($youmi_alltitle,$youmiecho,$youmi_title);
$youmi_title[0]=cuta($youmi_title[0],5);
$youmi_title[0]=cutal($youmi_title[0],1);
print_r($youmi_title[0]);

$youmi_allcontent="/span.class=\"highlight\">.*?<\/span/ism";
preg_match_all($youmi_allcontent,$youmiecho,$youmi_content);
$youmi_content[0]=cuta($youmi_content[0],23);
$youmi_content[0]=cutal($youmi_content[0],6);
print_r($youmi_content[0]);

