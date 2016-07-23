<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 11/21/15
 * Time: 5:32 PM
 */
require_once "functions.php";header("Content-type: text/html; charset=utf-8");


$muke="http://www.imooc.com/index/search?words="."微信开发";
$cookie="";
$mukeresult=fcontents($muke,$cookie);
$mukeresult=preg_replace("/href=\"\/learn\//u","href=\"http://www.imooc.com/learn/",$mukeresult);
$mukereg="/<ul.class=\"search-course\".*?<\/ul>/ism";

if(preg_match_all($mukereg,$mukeresult,$mukematch)){
    $mukeecho=$mukematch[0][0];
}
else{
    $mukeecho="没有在慕课网找到关于"."的课程";
}


$muke_allurl="/<div.class=\"thumbnail-inner\".*?<\/div>/ism";
preg_match_all($muke_allurl,$mukeecho,$muke_url);
$muke_str='';
for($i=0;$i<count($muke_url[0]);$i++){
    $muke_str=$muke_str.$muke_url[0][$i];
}
$muke_allurl2="/href=\".*?\"/ism";
preg_match_all($muke_allurl2,$muke_str,$muke_url2);
print_r($muke_url2[0]);

$muke_allimg="/src=\".*?\"/ism";
preg_match_all($muke_allimg,$muke_str,$muke_img);
print_r($muke_img[0]);

$muke_alltitle="/<h2.class=\"title.autowrap\".*?\/h2>/ism";
preg_match_all($muke_alltitle,$mukeecho,$muketitle);
$muke_str2='';
for($i=0;$i<count($muketitle[0]);$i++){
    $muke_str2=$muke_str2.$muketitle[0][$i];
}
$muke_alltitle2="/target=\".blank\".*?\/h2/ism";
preg_match_all($muke_alltitle2,$muke_str2,$muke_title2);

$muke_title2[0]=cuta($muke_title2[0],16);
$muke_title2[0]=cutal($muke_title2[0],4);

print_r($muke_title2[0]);


$muke_allcontent="/<div class=\"description.autowrap\".*?<\/div>/ism";
preg_match_all($muke_allcontent,$mukeecho,$muke_content);
$muke_content[0]=cuta($muke_content[0],34);
$muke_content[0]=cutal($muke_content[0],6);
print_r ($muke_content[0]);