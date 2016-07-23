<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 11/21/15
 * Time: 11:02 AM
 */


session_start();
header("Content-type: text/html; charset=utf-8");



require '../libs/Smarty.class.php';
include_once "functions.php";



$smarty = new Smarty;
$smarty->debugging = false;
$smarty->caching = false;
$keyword='php';
if(isset($_SESSION['search']))
{
    $keyword=$_SESSION['search'];
}

if (isset($_POST['search'])) {
    $_SESSION['search'] = $_POST['search'];
    $keyword = $_POST['search'];
}

//        header("location:index.php");
//        $keyword="php";







//youmi web   这是优米网的信息

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
//print_r($youmi_atag[0]);




$youmi_allimg="/img.src=\".*?\"/ism";
preg_match_all($youmi_allimg,$youmiecho,$youmi_img);
$youmi_img[0]=cuta($youmi_img[0],5);
//print_r($youmi_img[0]);

$youmi_alltitle="/alt=\".*?\"/ism";
preg_match_all($youmi_alltitle,$youmiecho,$youmi_title);
$youmi_title[0]=cuta($youmi_title[0],5);
$youmi_title[0]=cutal($youmi_title[0],1);
//print_r($youmi_title[0]);

$youmi_allcontent="/span.class=\"highlight\">.*?<\/span/ism";
preg_match_all($youmi_allcontent,$youmiecho,$youmi_content);
$youmi_content[0]=cuta($youmi_content[0],23);
$youmi_content[0]=cutal($youmi_content[0],6);
//print_r($youmi_content[0]);



//baidu  百度传课的信息

$baidu="http://www.chuanke.com/course/_".$keyword."_____.html";
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
$baidu_img[0]=cutal($baidu_img[0],1);
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

//echo $baiduecho;

//接下来是幕课网

$muke="http://www.imooc.com/index/search?words=".$keyword;
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
//print_r($muke_url2[0]);

$muke_allimg="/src=\".*?\"/ism";
preg_match_all($muke_allimg,$muke_str,$muke_img);
//print_r($muke_img[0]);

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

//print_r($muke_title2[0]);


$muke_allcontent="/<div class=\"description.autowrap\".*?<\/div>/ism";
preg_match_all($muke_allcontent,$mukeecho,$muke_content);
$muke_content[0]=cuta($muke_content[0],34);
$muke_content[0]=cutal($muke_content[0],6);
//print_r ($muke_content[0]);



//echo $mukeecho;

//极客学院  下面是极客学院
//
$jikexueyuan="http://search.jikexueyuan.com/course/?q=".$keyword;
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
preg_match_all($jike_allimg,$jikexueyuanecho,$jike_contentimg);
$jike_contentimg[0]=cuta($jike_contentimg[0],5);
$jike_contentimg[0]=cutal($jike_contentimg[0],1);
//print_r($jike_content[0]);

$jike_allurl="/href=\"http:\/\/www.jikexueyuan.com\/course\/[0-9]*.html/ism";
preg_match_all($jike_allurl,$jikexueyuanecho,$jike_url);
$jike_url[0]=array_unique($jike_url[0]);
$jike_url2=array();
for($i=0;$i<count($jike_url[0]);$i++){
    $jike_url2[$i]=$jike_url[0][$i*2];
}
$jike_url2=cuta($jike_url2,6);
//print_r($jike_url[0]);//  注意这个数组有点奇怪的，奇数项没有只有偶数项


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

//print_r($jike_title_result);


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

//print_r($jike_content_result);

//echo $jikexueyuanecho;




//  淘宝网，这个是淘宝网；


$taobao="http://i.xue.taobao.com/list.htm?q=".$keyword;
$cookie="";
$taobaoresult=fcontents($taobao,$cookie);
$taobaoresult=safeEncoding($taobaoresult);
$taobaoreg="/<div class=\"courses\".*?>.*<div class=\"fan-say\"(.*?<\/div>){3}/ism";
if(preg_match_all($taobaoreg,$taobaoresult,$taobaomatch)){
    $taobaoecho=$taobaomatch[0][0];
//        $taobaoecho=iconv("UTF-8", "GBK", $taobaoecho);
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
//print_r($taobao_url_result);


$taobao_allimg="/src=\".*?\"/ism";
preg_match_all($taobao_allimg,$taobaoecho,$taobao_img);
//print_r($taobao_img[0]);


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
//print_r($taobao_title2[0]);


$taobao_allnumber="/peo\".*?\/span>/ism";
preg_match_all($taobao_allnumber,$taobaoecho,$taobao_number);
$taobao_number[0]=cuta($taobao_number[0],10);
$taobao_number[0]=cutal($taobao_number[0],7);
for($i=0;$i<count($taobao_number[0]);$i++){
    $taobao_number[0][$i]=trim($taobao_number[0][$i]);
}
//print_r($taobao_number[0]);

$taobao_allcontent="/fan-say\">.*?\/div>/ism";
preg_match_all($taobao_allcontent,$taobaoecho,$taobao_content);
$taobao_content[0]=cuta($taobao_content[0],15);
$taobao_content[0]=cutal($taobao_content[0],15);
for($i=0;$i<count($taobao_content[0]);$i++){
    $taobao_content[0][$i]=trim($taobao_content[0][$i]);
}
//print_r($taobao_content[0]);



$baidu=array();
for($i=0;$i<count($baidu_url[0]);$i++){
    $baidu[$i]["url"]=$baidu_url[0][$i];
    $baidu[$i]["img"]=$baidu_img[0][$i];
    $baidu[$i]["number"]=$baidu_number[0][$i];
    $c=strlen($baidu[$i]["number"])-14;
    $baidu[$i]["number"]=substr($baidu[$i]["number"],5,$c);
    $baidu[$i]["number"]=trim($baidu[$i]['number']);
    $baidu[$i]['number']=intval($baidu[$i]["number"]);
    $baidu[$i]["title"]=$baidu_title[0][$i];
    $baidu[$i]["content"]="";
    $baidu[$i]["from"]="百度";
}
$baidures=$i;
if($jike_url2!="") {
    $baidu[$baidures]['url'] = $jike_url2[0];
    $baidu[$baidures]['title'] = $jike_title_result[0];
    $baidu[$baidures]['img'] = $jike_contentimg[0][0];
    $baidu[$baidures]['content'] = $jike_content_result[0];
    $baidu[$baidures]['number'] = rand(20000, 70000);
    $baidu[$i]['from'] = "极客学院";

    $baidu = array_sort($baidu, 'number', "desc");
}

//排序



$youmis=array();
for($i=0;$i<count($youmi_atag[0]);$i++){
    $youmis[$i]['url']=$youmi_atag[0][$i];
    $youmis[$i]['img']=$youmi_img[0][$i];
    $youmis[$i]['title']=$youmi_title[0][$i];
    $youmis[$i]['content']=$youmi_content[0][$i];

}



//$smarty->assign("baiduurl",$baidu_url[0]);
//$smarty->assign("baiduimg",$baidu_img[0]);
//$smarty->assign("baidunumber",$baidu_number[0]);
//$smarty->assign("baidutitle",$baidu_title[0]);
$smarty->assign("baidu",$baidu);

$smarty->assign("keyword",$keyword);
$smarty->display("CoursesSearch/html/searchResult.html");