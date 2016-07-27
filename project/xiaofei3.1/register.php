<!DOCTYPE html>
<html style="min-width: 400px;">
<head lang="en">
    <meta charset="UTF-8">
    <title>小飞图文——送货上门的打印店</title>
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/buttons.css" type="text/css" rel="stylesheet">
    <link href="css/index.css" type="text/css" rel="stylesheet">
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/messagecn.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body style="min-width: 400px;">
<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 6/10/15
 * Time: 4:54 PM
 */
include "header2.php";
?>
<br/><br/>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading" style="text-align: center">
            <img src="images/reg.png" style="width: 150px;">
        </div>
        <div class="panel-body">
            <form style="margin: 25px;" action="registercheck.php" method="post" id="regform">
                <div class="col-sm-12" style="height: 45px;">
                    <div class="col-sm-1 col-sm-offset-3"><b>昵称</b></div>
                    <div class="col-sm-7">
                        <input type="text"  class="form-control" id="name" name="name">
                    </div>
                    <div class="col-sm-1"></div>
                </div><br/><br/><br/><br/>
                <div class="col-sm-12" style="height: 45px;">
                    <div class="col-sm-1 col-sm-offset-3"><b>密码</b></div>
                    <div class="col-sm-7">
                        <input type="password"  class="form-control"  name="password">
                    </div>
                    <div class="col-sm-1"></div>
                </div><br/><br/><br/><br/>
                <div class="col-sm-12" style="height: 45px;">
                    <div class="col-sm-1 col-sm-offset-3"><b>电话</b></div>
                    <div class="col-sm-7">
                        <input type="text"  class="form-control"  name="phone">
                    </div>
                    <div class="col-sm-1"></div>
                </div><br/><br/><br/><br/>
                <div class="col-sm-12" style="height: 45px;">
                    <div class="col-sm-1 col-sm-offset-3"><b>地址</b></div>
                    <div class="col-sm-7">
                        <input type="text"  class="form-control" name="address" placeholder="地址用于作为您的最常用收件地点">
                    </div>
                    <div class="col-sm-1"></div>
                </div><br/><br/><br/><br/>
                <div class="col-sm-12" style="height: 45px;">
                    <div class="col-sm-1 col-sm-offset-3"><b>邮件</b></div>
                    <div class="col-sm-7">
                        <input type="email"  class="form-control" name="email" placeholder="邮件用于免费发送各种福利给您">
                    </div>
                    <div class="col-sm-1"></div>
                </div><br/><br/><br/><br/>
                <div class="col-sm-12" style="height: 45px;">
                    <div class="col-sm-1 col-sm-offset-3"><b>验证码</b></div>
                    <div class="col-sm-5">
                        <input type="text"  class="form-control" id="ecode" name="ecode" placeholder="请输入验证码">
                    </div>
                    <div class="col-sm-3">
                        <img src="createcode.php" onClick="javascript:this.src='createcode.php?'+Math.random()" style="width: 150px;" id="yanzheng">
                    </div>
                </div><br/><br/><br/><br/>
                <input type="submit" class="btn btn-primary btn-lg btn-block" style="width: 70%;margin-left: 20%;margin-right: 10%" value="立即注册" id="subreg">
            </form>
        </div>
    </div>
</div>


<?php   include "footer.php"
?>

<script>

    $().ready(function() {


        $(".index-function").on("click",function(){
            alert("该功能于近期上线，敬请期待！");
        });

        $("#subreg").validate({
            submitHandler:function(form){
                form.submit();
            }
        });


        $("#regform").validate({

            rules: {
                name: {
                    remote:{
                        url:"checkreg.php",
                        type:"post",
                        dataType:"json",
                        data:{
                            name:function(){
                                return $("#name").val();
                            }
                        },
                        dataFilter: function(data) {
                            if (data == "yes"){
                                return true;}
                            else {
                                return false;
                            }
                        }
                    },
                    required:true,
                    minlength:2
                },
                password: {
                    required: true,
                    minlength: 6
                },
                phone:{
                    required:true,
                    digits:true,
                    minlength: 6,
                    maxlength:12
                },
                address:{
                    required:true,
                    minlength:3

                },
                email:{
                    required:true,
                    email:true
                },
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
                name: {
                    remote:"此用户名已被注册",
                    required:"用户名必填",
                    minlength:"用户名最少为两个字符"
                },
                password: {
                    required: "请输入密码",
                    minlength: "密码不能少于6个字符"
                },
                address: {
                    required: "请输入地址",
                    minlength: "请输入正确格式的完整地址"
                },
                phone: {
                    required: "请输入电话",
                    digits:"请输入正确的电话格式",
                    minlength: "请输入正确的电话格式",
                    maxlength: "请输入正确的电话格式"
                },
                email:{
                    required:"请输入电子邮箱",
                    email:"请输入正确格式的电子邮箱"
                },
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