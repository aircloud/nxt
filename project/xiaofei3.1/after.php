<?php session_start(); ?>
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
<div class="container" style="margin-top: 60px;">
    <div class="col-lg-12" align="center">
        <img src="images/success.png" style="width: 50px;" id="xiangying1">
        <br/><br/>
    </div>
    <div class="col-lg-12" align="center">
        <span style="color:darkblue;font-size: 20px;" id="xiangying2" >您的打印已经提交成功！稍后小飞运营会以短信的形式提醒您付款和配送信息。</span><br/><BR/>
        <span style="color:darkblue;font-size: 20px;" id="xiangying2" >有任何疑问请在电话页面底部qq或者电话联系小飞运营。</span><br/><br/>
    </div>
<!--    <div  style="width: 100%;" align="center">-->
<!--        <img src="images/zhifubao2.png" style="margin: 20px auto;" id="xiangying3">-->
<!--    </div>-->
    <div style="text-align: center;height: 50px;" align="center">
        <div class="button-group" style="position: relative;margin: auto;">
            <a href="main.php" type="button" class="button button-pill button-royal button-border"><b>继续打印</b></a>
            <a href="http://class.huicy.net" target="_blank" type="button" class="button button-pill button-royal button-border"><b>随便逛逛</b></a>
        </div>
    </div><br/>
    <div style="width:100%;" align="center">
        <form action="yijian.php" method="post">
            <div style="height: 130px;">

                <div class="col-sm-12 " style="margin: auto">
                    <textarea rows="5" style="border: 5px solid #b7f5e9;color:darkblue" cols="80"   placeholder="请留下您的宝贵意见,谢谢！" name="knowledge"></textarea><br/><br/>
                </div>
            </div>
            <input type="submit" style="width:45%;display: inline-block;" value="提交意见" class="button button-pill button-royal button-border">
            <br/><br/>
        </form>
    </div>


</div>


<?php
include "footer.php";
?>


</body>
</html>