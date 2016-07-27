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

    include "duanxin.php";
    $pr=$_POST['pr'];
    $temp=$_POST['temp'];
    $username=$_SESSION['name'];
    $phone=$_POST['phone'];//电话确认
    $address=$_POST['address'];//地址确认
    $number=$_POST['number'];//份数确认
    $first="/xiaofei3.1/";
    $date=date('Y-m-d');
    echo $date;
    $tip=@$_POST['beizhu'].$temp;
    $error='';
    //    echo $username.$print.$method.$color.$phone.$address;


    $str="insert into task (username,address,number,phone,tip) VALUES ('$username','$address','$number','$phone','$tip')";

    mysql_query("SET NAMES 'utf8';");
    mysql_query($str);


    if($error!=''){
        echo $error."这是打印的错误";
    }
    ?>
    <p class="jump">
        页面自动 <a id="href" href="javascript:history.back(-1);">跳转</a> 等待时间： <b id="wait">50</b>
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
        echo " location.assign(\"money2.php?pr=".$pr."&number=".$number."\");\r\n";
        echo "</script>";
    }
    ?>

</div>
</body>
</html>



