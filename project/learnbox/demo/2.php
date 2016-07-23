<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 11/21/15
 * Time: 5:32 PM
 */
//极客学院  下面是极客学院

require_once "functions.php";header("Content-type: text/html; charset=utf-8");


$jikexueyuan="http://search.jikexueyuan.com/course/?q=php";
$cookie="";
$jikexueyuanresult=fcontents($jikexueyuan,$cookie);
$jikexueyuanreg="/<ul>.*?<li class=\"course\".*?<\/ul>/ism";
if(preg_match_all($jikexueyuanreg,$jikexueyuanresult,$jikexueyuanmatch)){
    $jikexueyuanecho=$jikexueyuanmatch[0][0];
}
else {
    $jikexueyuanecho="没有在极客学院找到关于"."的课程";
}



$jike_allimg="/src=\".*?\"/ism";
preg_match_all($jike_allimg,$jikexueyuanecho,$jike_content);
print_r($jike_content[0]);

$jike_allurl="/href=\"http:\/\/www.jikexueyuan.com\/course\/[0-9]*.html/ism";
preg_match_all($jike_allurl,$jikexueyuanecho,$jike_url);
$jike_url[0]=array_unique($jike_url[0]);
print_r($jike_url[0]);//  注意这个数组有点奇怪的，奇数项没有只有偶数项


$jike_alltitle="/<li class=\"course\".*?li>/ism";
preg_match_all($jike_alltitle,$jikexueyuanecho,$jike_title);
$jike_title_result=array();
for($i=0;$i<count($jike_title[0]);$i++){
    $temp="/<div class=\"title\">.*?div>/ism";
    preg_match_all($temp,$jike_title[0][$i],$temp2);
    $jike_title_result[$i]=$temp2[0][0];
}
$jike_title_result=cuta($jike_title_result,19);
$jike_title_result=cutal($jike_title_result,6);

print_r($jike_title_result);


$jike_allcontent="/<li class=\"course\".*?li>/ism";
preg_match_all($jike_allcontent,$jikexueyuanecho,$jike_content);
$jike_content_result=array();
for($i=0;$i<count($jike_content[0]);$i++){
    $temp="/<div class=\"description\">.*?div>/ism";
    preg_match_all($temp,$jike_content[0][$i],$temp2);
    $jike_content_result[$i]=$temp2[0][0];
}
$jike_content_result=cuta($jike_content_result,25);
$jike_content_result=cutal($jike_content_result,6);

print_r($jike_content_result);