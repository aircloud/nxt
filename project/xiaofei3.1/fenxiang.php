<?php
session_start();
?>

<!DOCTYPE html>
<html style="min-width: 400px;">
<head lang="en">
    <meta charset="UTF-8">
    <title>小飞图文——送货上门的云端打印店</title>
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/buttons.css" type="text/css" rel="stylesheet">
    <link href="css/index.css" type="text/css" rel="stylesheet">
    <link href="css/jquery-labelauty.css" type="text/css" rel="stylesheet">
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/messagecn.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-labelauty.js"></script>
</head>
<body style="min-width: 400px;">

<?php  include "header.php" ?>


<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
            <form action="fenxiangafter.php" method="post" id="fenxiang-form">
                <div style="text-align: center">
                    <div class="col-sm-2 col-sm-offset-2" style="position: relative;  top:5px;">
                        <b>
                            <label for="file" style="position: relative;left: 50px;">文件</label>
                        </b>
                    </div>
                    <div class="col-sm-7">
                        <input type="file" name="file" class="btn btn-default" style="position: relative;left:1%;"  id="file" />
                    </div>
                    <div class="col-sm-4"></div>
                </div><br/><br/><br/>
                <div class="col-sm-12" style="height: 45px;">
                    <div class="col-sm-2 col-sm-offset-2" style="position: relative;  top:10px;left:80px;"><b>邮件确认</b></div>
                    <div class="col-sm-4">
                        <input type="email"  id="email" class="form-control" name="email">
                    </div>
                    <div class="col-sm-4"></div>
                </div><br/><br/><br/>
                <div class="col-sm-12" style="height: 45px;">
                    <div class="col-sm-2 col-sm-offset-2" style="position: relative;  top:10px;left:80px;"><b>备注信息</b></div>
                    <div class="col-sm-4">
                        <input type="text"  id="beizhu" class="form-control" name="beizhu">
                    </div>
                    <div class="col-sm-4"></div>
                </div><br/><br/><br/>
                <div style="width:40%;margin-right: 24%;margin-left: 36%;">
                    <label style="text-align: center;margin: auto;padding: auto;" >
                        <input type="checkbox" name="agree"><a href="#"  data-toggle="modal" data-target="#about-modal" id="tagger4"> 已经阅读并同意分享规则&nbsp;&nbsp;</a>
                    </label>
                </div>
                <br/><br/>
                <input type="submit" class="btn btn-info" value="立即分享" id="subfenxiang" style="width: 37%;margin-left: 28%;margin-right: 35%;">
            </form>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>


<div class="modal fade" id="about-modal" tabindex="-1" role="dialog" aria-labelledby="modal-label"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span
                        aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
                <h4 class="modal-title" id="modal-label">分享规则</h4>
            </div>
            <div class="modal-body">
                <p style="text-indent: 2em">
                   <B>“我要分享”规则</B>
                </p> <p style="text-indent: 2em;color:red"> 注：我要分享功能会在近期完善，在这其中您的资料会保存在云端。
                </p> <p style="text-indent: 2em"> 要求：您分享给其他同学打印使用的资料必须合乎国家相关法律规定，不能侵犯他人知识产权！
                </p> <p style="text-indent: 2em"> 奖励：分享成功后您将可以免费黑白打印您分享的资料，彩打按黑白单价计费。                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">了解了</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" >
    $().ready(function() {

        $(".no-function").on("click",function(){
            alert("功能即将上线，敬请期待！");
        });

        $("#subfenxiang").validate({
            submitHandler:function(form){
                form.submit();
            }
        });

        $("#fenxiang-form").validate({
            rules: {
                email: {
                    required:true,
                    email:true
                },
                password: {
                    required: false
                },
                agree:{
                    required:true
                }

            },
            messages: {
                email: {
                    required:"请输入邮箱",
                    email:"请输入符合规范的邮箱"
                },
                agree:{
                    required:"请阅读分享规则"
                }
            }
        });

    });
</script>


</body>
</html>