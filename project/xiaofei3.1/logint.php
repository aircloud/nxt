<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>登陆缓冲</title>
</head>
<body style="background-color: rgba(0,0,0,0.4)">
<div style="margin:20% 40%;height: 60px;width: 200px;padding: 15px 50px;;background-color: white;text-align: center;border-radius: 5px;border: 3px solid darkblue">
    <?php
    /**
     * Created by PhpStorm.
     * User: onlythen
     * Date: 6/10/15
     * Time: 2:34 PM
     */
    $lifeTime = 6000*24;
    session_set_cookie_params($lifeTime);
    session_start();
    require_once("config.php");
    $link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
    mysql_select_db($DBNAME);

    $name=$_POST['name'];
    $password=md5($_POST['password']);

    $str="select password from user where name='$name'";
    mysql_query("SET NAMES 'utf8';");
    $result=mysql_query($str);
    $number=mysql_num_rows($result);

    if($number==0){
        $re="用户名不存在";
        echo $re;
    }
    else {
        $temp=mysql_fetch_array($result);
        if($password!=$temp['password']){
            $re="密码错误";
            echo $re;
        }
        else{
            $_SESSION['name']=$name;
            $str2="update user set onlinetime=onlinetime+1 WHERE name='$name'";
            mysql_query("SET NAMES 'utf8';");
            mysql_query($str2);
            echo "登录成功";
            echo "<script language=\"JavaScript\">\r\n";
            echo " location.assign(\"main.php\");\r\n";
            echo "</script>";
        }
    }
    //?>
    <p class="jump">
        页面自动 <a id="href" href="javascript:history.back(-1);">跳转</a> 等待时间： <b id="wait">3</b>
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
</div>
</body>
</html>