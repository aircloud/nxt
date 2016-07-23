<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 5/30/15
 * Time: 12:14 PM
 */
function safeEncoding($str){
    $code=mb_detect_encoding($str,array('ASCII','GB2312','GBK','UTF-8'));//检测字符串编码
    if($code=="CP936"){
        $result=$str;
    }
    else{
        //$result=mb_convert_encoding($str,'UTF-8',$code);//将编码$code转换为utf-8编码
        $result=iconv($code,"UTF-8",$str);
    }
    return $result;
}


function fcontents($url,$cookie){
    $ch = curl_init();

//    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
//    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT,10);
    curl_setopt	($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.22 (KHTML, like Gecko) Chrome/25.0.1364.172 Safari/537.22"); // 模拟用户使用的浏览器
    curl_setopt ($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_TIMEOUT, "60");
    curl_setopt($ch, CURLOPT_ENCODING ,'gzip'); //加入gzip解析
    curl_setopt($ch, CURLOPT_REFERER,$url); //为什么我的眼里常含泪水
    $fcontents = curl_exec($ch);
    return $fcontents;
}

function fmore($url,$cookie){
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT,10);
    curl_setopt	($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.22 (KHTML, like Gecko) Chrome/25.0.1364.172 Safari/537.22"); // 模拟用户使用的浏览器
    curl_setopt ($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_TIMEOUT, "60");
    curl_setopt($ch, CURLOPT_ENCODING ,'gzip'); //加入gzip解析
    curl_setopt($ch, CURLOPT_REFERER,$url); //为什么我的眼里常含泪水
    $fcontents = curl_exec($ch);
    return $fcontents;
}

function cuta($array,$number){
    $c=count($array);
    for($i=0;$i<$c;$i++){
        $array[$i]=substr($array[$i],$number);
    }
    return $array;
}

function sava($array,$number){
    $c=count($array);
    for($i=0;$i<$c;$i++){
        $array[$i]=substr($array[$i],0,$number);
    }
    return $array;
}


function cutal($array,$number){
    $c=count($array);
    for($i=0;$i<$c;$i++){
        $numbers=strlen($array[$i])-$number;
        $array[$i]=substr($array[$i],0,$numbers);
    }
    return $array;
}



function array_sort($arr,$keys,$type='asc'){
    $keysvalue = $new_array = array();
    foreach ($arr as $k=>$v){
        $keysvalue[$k] = $v[$keys];
    }
    if($type == 'asc'){
        asort($keysvalue);
    }else{
        arsort($keysvalue);
    }
    reset($keysvalue);
    foreach ($keysvalue as $k=>$v){
        $new_array[$k] = $arr[$k];
    }
    return $new_array;
}

