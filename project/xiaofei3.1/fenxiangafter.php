<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 6/14/15
 * Time: 10:31 PM

 */


$name=$_SESSION["name"];
$email=$_POST["email"];
$beizhu=$_POST['beizhu'];
$date="userupload";

if ($_FILES["file"]["error"] > 0)
{
    $error= "服务器暂忙，请稍后";
    echo $_FILES["file"]["error"]."这是文件的错误";
    $second='';
}
else
{
    $arr=explode(".",$_FILES["file"]["name"]);
    $total=count($arr);
    $final=$arr[$total-1];
    $up= "Upload: " . $_FILES["file"]["name"] . "<br />";
    $type= "Type: " . $_FILES["file"]["type"] . "<br />";
    $size= "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    $templujing= "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
    if (!is_dir('upload/'.$date.'/'))
        mkdir ('upload/'.$date.'/');
    $second="upload/".$date."/" ."-name:".$name.time().".".$final;
    move_uploaded_file($_FILES["file"]["tmp_name"],
        $second);
//        echo "<a href=".$first.$second.">下载试试</a>";
}

echo "<script language=\"JavaScript\">\r\n";
echo " history.back(-1);\r\n";
echo "</script>";