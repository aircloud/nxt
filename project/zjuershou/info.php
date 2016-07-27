<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 8/1/15
 * Time: 7:18 PM
 */
session_start();

require_once("config.php");
@header("Content-type: text/html; charset=utf8");


$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
ini_set('date.timezone','Asia/Shanghai');


?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta name="viewport" content="width=divice-width,initial-scale=0.85,user-scalable=no,maximum-scale=0.85">

    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/jquery.mobile-1.4.5.min.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>

    <style>

        body{
            background-image: url(images/repeaty.jpg) !important;
            background-repeat: repeat-y ;
        }
        #bookhead{
            background-color: rgba(255,69,0,0);
            height: auto;
        }

        #search{
            width: 60%;
            border-radius: 0;
            background-color: white;
            float: left;
            min-height: 40px;
            border: none;
        }
        .error{
            color:red;
        }
        /*body{
            background-color: #eeeeee;
        }*/

        #searchbutton{
            float: left;
            background-color: #44FC05;
            width: 40%;
            text-align: center;
            font-size: 24px;
            min-height: 40px;
            border: none;
            color: white;
        }
    </style>
</head>
<body>

<div class="container" style="background-image: url(images/repeaty.jpg);">
    <?PHP
    $id=$_GET['id'];
    //    $id=11;
    $str1="select * from booklist where id='$id'";
    mysql_query("SET NAMES 'utf8';");
    $result=mysql_query($str1);
    $number=mysql_num_rows($result);
    $temp=mysql_fetch_array($result);

    ?>

    <div class="panel" style="overflow:hidden;clear:both;margin: 20px;text-align: center;color:blue;line-height: 140%;">
        <H4 style="line-height: 120%;margin: 20px 10px;">声明：请在决定购买后点击“我要购买”链接下沉此商品防止其他人重复购买。通过提供的联系方式自行联系卖家</H4>
    </div>


    <div class="panel" style="overflow:hidden;clear:both;margin: 10px;">

        <div  style=";width: 90%;margin: 10px 5%;min-height: 200px;">
            <h4 style="border-bottom: 1px solid #b0b0b0;padding-bottom: 4px;"><B><?php  echo $temp['bookname']; ?></B>&nbsp;&nbsp;<b><?php  echo $temp['price']; ?></b></h4>
            <p><?php  echo $temp['edition']; ?></p>
            <P><?php  echo $temp['introduct']; ?></P>
            <P style="color:#0000ff">联系方式：<?php  echo $temp['phone']; ?></P>
            <P >所在地址：<?php  echo $temp['address']; ?></P>
            <SPAN style="color:darkblue"><?php  echo $temp['ifsong']; ?></SPAN>
            <br/>
            <br/>
            <!--            --><?php // echo "<a href='success.php?id=".$temp['id']." ' data-ajax=\"false\"  >"; ?><!--<button class="btn btn-info" data-role="none" style="width:100%;margin: auto;">我要购买</button></a>-->
            <form id="regform" action="success.php?id=<?php  echo $temp['id']; ?>" method="get" style="width: 90%;margin: auto 5%;" data-ajax="false" data-role="none">
                <!--                <div >-->
                <!--                </div>-->
                <!--                <div class="col-lg-6">-->
                <!--                    <img src="createcode.php" onClick="javascript:this.src='createcode.php?'+Math.random()"  style="width: 100%" id="yanzheng">-->
                <!--                </div>-->

                <!--                <div class="ui-block">-->
                <!--                    <div class="ui-bar ui-bar-a">-->
                <!--                        -->
                <!--                    </div>-->
                <!--                    <div class="ui-bar ui-bar-b">-->
                <!--                        <img src="createcode.php" onClick="javascript:this.src='createcode.php?'+Math.random()"  style="width: 100%" id="yanzheng">-->
                <!--                    </div>-->
                <!--                </div>-->

                <div class="ui-grid-a">
                    <input type="text" value="<?php  echo $temp['id']; ?>" name="id" style="display: none">
                    <div class="ui-block-a">
                        <input data-role="none" data-ajax="false" style="width: 100%;height:45px;border-radius:0;" placeholder="请输入验证码" id="ecode" name="ecode">
                    </div>
                    <div class="ui-block-b">
                        <img src="createcode.php" onClick="javascript:this.src='createcode.php?'+Math.random()"  style="width: 100%;height:45px;" id="yanzheng">
                    </div>
                </div>
                <br/>
                <input id="subreg" type="submit" value="决定购买" style="width:100%;background-color: #008cba;border: none;height:45px;border-radius: 0;">

            </form>

        </div>

        <div style="width: 90%;margin: 10px 5%;min-height: 200px;">
            <img src="<?php  echo $temp['picture']; ?>" style="width: 80%;margin: 10px 10%;">
        </div>
    </div>
</div>

</div>

<div data-role="footer" data-position="fixed" id="bookfoot">
    <h1>版权所有:优澄文化 浙ICP备15000598</h1>
</div>


<script>
    $().ready(function() {

        $("#subreg").validate({
            submitHandler:function(form){
                form.submit();
            }
        });


        $("#regform").validate({

            rules: {
                ecode:{
                    remote:{
                        url:"checkcode.php",
                        type:"post",
                        dataType:"json",
                        data:{
                            ecode:function(){
                                return $("#ecode").val();
                            }
                        },
                        dataFilter: function(data) {
                            if (data == "yes")
                                return true;
                            else {
                                return false;
                            }
                        }
                    },
                    required:true
                }

            },
            messages: {
                ecode:{
                    required:"请输入验证码",
                    remote:"请修正验证码，区分大小写！"
                }
            }
        });

    });
</script>
</body>
</html>