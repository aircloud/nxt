<?php session_start();
$_SESSION['name']="sorry";
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

<?php // include "header.php" ?>
<div class="container" style="margin-top: 60px;">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h4 style="text-align: center">网站关停通知</h4>
        </div>
        <div class="panel-body">
            <p style="text-indent: 2em;font-size: 18px;text-shadow: 0px 1px yellow;color:blue;">同学们，考试周临近了，小飞图文这学期就到这里吧，谢谢您一直对小飞图文的支持，我们在下学期开学会发布我们下一个功能更强，体验更方便的下一个革命性版本，
                到时候不要忘了继续关注喔。</p>
            <p style="text-indent: 2em;font-size: 18px;text-shadow: 0px 1px yellow;color:blue">关于我们的种种问题，您可以留下您的宝贵意见，今年九月，我们不见不散！</p>
        </div>
        <div class="panel-footer">
            <P style="text-indent: 3em">如果想加入我们，请发送您的个人简历到advice@xiaofeituwen.com,我们会细看嗒～</P>
        </div>
    </div>
    <br/><br/>
    <div style="width:100%;" align="center">
        <form action="yijian2.php" method="post">
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