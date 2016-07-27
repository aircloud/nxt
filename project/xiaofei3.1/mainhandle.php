<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>请求错误</title>
</head>
<body style="background-color: rgba(0,0,0,0.4)">
<div style="margin:20% 40%;height: 60px;width: 200px;padding: 15px 50px;;background-color: white;text-align: center;border-radius: 5px;border: 3px solid darkblue">
    <?php
    /**
     * Created by PhpStorm.
     * User: onlythen
     * Date: 6/11/15
     * Time: 4:38 PM
     */
    @header("Content-type: text/html; charset=utf8");
    session_start();
    require_once("config.php");
    $link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
    mysql_select_db($DBNAME);

    require_once("duanxin.php");


    $username=$_SESSION['name'];
    $print=$_POST['print'];//单面还是双面
    $method=$_POST['method'];//自取还是不自取
    $color=$_POST['color'];//彩色还是黑白
    $phone=$_POST['phone'];//电话确认
    $address=$_POST['address'];//地址确认
    $number=$_POST['number'];//份数确认
    $banshu=$_POST['banshu'];
    if($method=="立即配送")
        $deadline="立即配送";
    else {
        $deadline = $_POST['peisongtime'];
    }
    $first="/xiaofei3.1/";
    $date=date('Y-m-d');
    echo $date;
    $tip=@$_POST['beizhu'];
    $error='';
    //    echo $username.$print.$method.$color.$phone.$address;
    if ($_FILES["file"]["error"] > 0 ||$address=="")
    {
//        $error= "服务器暂忙，请重新传输";
//        echo $_FILES["file"]["error"]."这是文件的错误";
//        $second='';
        echo "<script language=\"JavaScript\">\r\n";
        echo " location.assign(\"bug.php\");\r\n";
        echo "</script>";
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
        $second="upload/".$date."/" ."mobile".$phone.'-times:'.$number."-name:".time().".".$final;
        move_uploaded_file($_FILES["file"]["tmp_name"],
            $second);
//        echo "Stored in: " .$second."size".$size;
//        echo "<a href=".$first.$second.">下载试试</a>";
    }


    $url=$second; //链接

    $info="－NAME－".$username."－面数－".$print."－颜色－".$color."－方式－".$method."－地址".$address."－电话－".$phone."－链接－".$url;

    $str="insert into task (username,address,fileaddress,method,ifdouble,number,deadline,color,phone,tip,banshu) VALUES ('$username','$address','$url','$method','$print','$number','$deadline','$color','$phone','$tip','$banshu')";

    mysql_query("SET NAMES 'utf8';");
    mysql_query($str);


    if($error!=''){
        echo $error."这是打印的错误";
    }
    ?>
    <p class="jump">
        页面自动 <a id="href" href="javascript:history.back(-1);">跳转</a> 等待时间： <b id="wait">5</b>
    </p>
    <script type="text/javascript">
        (function(){
            var wait = document.getElementById('wait'),href = document.getElementById('href').href;
            var interval = setInterval(function(){
                var time = --wait.innerHTML;
                if(time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                };
            }, 1000);
        })();
    </script>
    <?php
    if($error=='') {
        echo "<script language=\"JavaScript\">\r\n";
        echo " location.assign(\"after.php\");\r\n";
        echo "</script>";
    }
    ?>

</div>
</body>
</html>



