<?php
session_start();
if(isset($_SESSION['name'])) {
    if ($_SESSION['name'] != '') {
        echo "<script language=\"JavaScript\">\r\n";
        echo " location.assign(\"main.php\");\r\n";
        echo "</script>";
    }
}
?>

<!DOCTYPE html>
<html style="min-width: 400px;">
<head lang="en">
    <meta charset="UTF-8">
    <title>小飞图文——送货上门的云端打印店</title>
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/buttons.css" type="text/css" rel="stylesheet">
    <link href="css/index.css" type="text/css" rel="stylesheet">
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/messagecn.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body style="min-width: 400px;">
<div class="button-group" style="width:100%; padding-bottom: 0;margin-bottom: 0;display: block; ">
    <button type="button" class="index-function button button-highlight">学霸资料分享</button>
    <button type="button" class="index-function button button-caution">通识开卷考</button>
    <button type="button" class="index-function button button-royal">形势与政策</button>
    <button type="button" class="index-function button button-action">历年考试题</button>
</div>

<div class="bigtop">
    <div class="bigpic">
        <div class="index_bigtran">
            <img src="images/pic.png" style="width: 80%" id="first">
            <img src="images/logow.png" style="width: 80%" id="second">
            <br/><br/>
            <p class="white-big" style="font-size: 18px">紫金港送货上门的云端打印店</p>
        </div>
    </div>
</div>
<div class="content">
    <div class="button-group" style="margin-top:100px;">
        <a type="button" class="button button-pill button-primary" style="min-width: 50px;" data-toggle="modal" data-target="#about-modal-login" >已有账号直接登录</a>
        <a href="register.php" type="button" class="button button-pill button-primary" style="min-width: 50px;">首次使用请先注册</a>
    </div>
</div>
<br/><br/>
<div class="container" style="min-height: 300px;">
    <img src="images/jianjie.png" style="width: 100px;">
    <div class="container-content">
        <p>
            我们“小飞图文”团队通过“互联网+打印机”，致力于解决同学们打印难（打印需求量大，排队现象严重；经常为找零钱浪费时间），
            打印贵（传统打印店黑白打印单价为0.1元/页 、彩色打印单价为1元/页）等问题，为同学们提供低廉（黑白打印单价为<span style="color:red">0.06元/页，0.1元/双面</span>；
            彩色打印单价为<span style="color:red">0.6元/页，1元/双面</span>，打印纸质量与传统无异）、方便（资料上传即可打印，支付宝付款，服务时间一个小时内送至同学寝室信箱或指定位置）的打印服务。
            <span style="color:red"> 也可以以实惠的价位打印历年考题资源。</span>
            此外，同学们的资料可以分享交流以供有需要的同学打印使用！
        </p>
    </div>
</div>

<?php
include "footer.php";
?>


<div class="modal fade" id="about-modal-login" tabindex="-1" role="dialog"  aria-labelledby="modal-label"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" >
            <form id="commentForm" class="rounded" method="post" action="logint.php" style="width: 100%;text-align: center">
                <h3>用户登录</h3>
                <br/>
                <div class="field-bb">
                    <div class="col-lg-2 col-lg-offset-1">
                        <label for="name" class="label-class-login" style="margin-top:5px;">用户名:</label>
                    </div>
                    <div class="col-lg-7 ">
                        <input type="text" class="form-control"  name="name" id="name" placeholder="用户名" />
                    </div>
                </div>
                <br/><br/><br/>
                <div class="field-bb">
                    <div class="col-lg-2 col-lg-offset-1 ">
                        <label for="password" class="label-class-login" style="margin-top:5px;">密码:</label>
                    </div>
                    <div class="col-lg-7 ">
                        <input type="password" class="form-control"  name="password" id="password" placeholder="密码" />
                    </div>
                </div>
                <br/><br/><br/>
                <input  name="Submit" type="submit" id="signupForm" class="btn btn-info" value="Submit" style="width: 80%" />
                <br/><br/>
            </form>
        </div>
    </div>
</div>


</body>
<script type="text/javascript" >
    $().ready(function() {

        $(".index-function").on("click",function(){
            alert("请先登录！");
        });

        $("#signupForm").validate({
            submitHandler:function(form){
                form.submit();
            }
        });

        $("#commentForm").validate({
            rules: {
                name: {
                    required:true,
                    minlength:2
                },
                password: {
                    required: true,
                    minlength: 6
                }

            },
            messages: {
                name: {
                    required:"用户名必填",
                    minlength:"请填入符合规范的用户名"
                },
                password: {
                    required: "请输入密码",
                    minlength: "密码不能少于6个字符"
                }

            }
        });

    });
</script>
</html>