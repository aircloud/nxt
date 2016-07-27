<?php
session_start();
?>
<!DOCTYPE html>
<html style="min-width: 100px;" xmlns="http://www.w3.org/1999/html">
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
    <script src="js/jquery.media.js"></script>
    <script src="js/jquery-labelauty.js"></script>
    <style>
        input.error { border: 1px solid red !important; }
        label.error {
            display: none !important;
        }
        label.checked {
            display: none !important;
        }
    </style>
</head>
<body>
<?php
include "header.php";
?>

<div class="container" style="margin-top: 20px">
    <div class="col-lg-8 col-lg-offset-2" style="text-align: center">
        <form method="get" action="test2.php" id="show-search">
            <br/><br/>
            <input placeholder="请输入你想搜索学科种类或课程种类" type="text" name="temp" class="input-lg" id="insearch" value="<?php if(isset($_GET['temp']))echo $_GET['temp'];  ?>">
            <input type="submit" class="button button-primary button-glow " id="onsearch" value="查询类别">
        </form><br/><br/>
    </div><br/><br/><br/>
    <div class="col-lg-8 col-lg-offset-2">
    </div>
</div>


<br/><br/>
<div class="container">
    <form action="examdingdan.php" method="post" id="form1">
        <?php
        include "examblock2.php";
        ?>
    </form>
</div>

<div class="show-footer">
    <a class="button button-block button-rounded button-large bold" id="shownumber" onclick="submitform()" style="color: #1398FD">点击提交我的打印订单(共0个)</a>

</div>

<div class="modal fade" id="about-modal" tabindex="-1" role="dialog" aria-labelledby="modal-label"
     aria-hidden="true">
    <div class="modal-dialog" style="width: 800px;">
        <div class="modal-content">
            <a class="media" href=""><span style="color:red;text-indent: 4em" >单击四周关闭pdf预览</span></a>

        </div>
    </div>
</div>

<script type="text/javascript">

    var times=0;
    $(".lab-class").on("click",function(){
        if($(this).attr("if")=="0") {
            times++;
            $("#shownumber").html("点击提交我的打印订单(共" + times + "个)");
            $(this).attr("if","1");
        }
        else{
            times--;
            $("#shownumber").html("点击提交我的打印订单(共" + times + "个)");
        }
    });

    function submitform(){
        $("#form1").submit();
    }

    $(function() {


//        $('a.media').attr("href","").media({width:800, height:600});

        $(".yulan").on("click",function(){
            var totemp=$(this).attr("for");
            $('div.media').remove();
            var atemp=document.createElement("a");
//            atemp.innerHTML="单击四周关闭pdf预览";
            $(".modal-content").append(atemp);
            $(atemp).addClass("media").attr("href",totemp).media({width:800, height:600});

        });

        $("#onsearch").validate({
            submitHandler:function(form){
                form.submit();
            }
        });

        $("#show-search").validate({
            rules: {
                temp: {
                    required:true
                }
            },
            messages: {
                temp: {
                    required:""
                }
            }
        });


    });
</script>
</body>

<script>


    $(function(){
        $('.lab-class').labelauty();
        <?php  if(isset($_GET['temp'])){?>
        $(".panel").css("display", "none");
        <?php  } ?>
        $(".panel:contains(<?php  if(isset($_GET["temp"]))echo $_GET['temp'] ?>)").css("display", "block");
//

    });
</script>

</html>
