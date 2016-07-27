<?php
session_start();
require_once("config.php");
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
$n=$_SESSION['name'];
$str1="select phone,address from user WHERE  name='$n'";
mysql_query("SET NAMES 'utf8';");
$result=mysql_query($str1);
$temp=mysql_fetch_array($result);
$pho=$temp['phone'];
$add=$temp['address'];
?>


<!DOCTYPE html>
<html style="min-width: 100px;">
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
<body style="min-width: 200px;">

<?php  include "header.php" ?>

<div class="container">

    <div class="col-lg-4" style="min-height: 400px;">
        <br/><br/>
        <img id="change1"src="images/zhifubao2.png">
        <br/><br/>
        <img id="change2"src="images/moneydia2.jpg" style="width:100%;">
    </div>
    <div class="col-lg-8" style="min-height: 860px">
        <div class="peal peal-default" style="width: 80%;margin:5%;height: 250px;border-top: 5px solid #00ccff">
            <div class="peal-body">
                <h4 style="float: right;color: #00007d">信息确认</h4><br/><br/>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        您的订单
                    </div>
                    <div class="panel-body" style="color:darkblue;">
                        <?php
                        $print=$_POST["print"];//是一个数组
                        $pr=0;
                        $dayin='';
                        $source=array(
                            "1001"=>"复习ppt黑白版[0.54元]",
                            "1002"=>"复习ppt彩色版[4.8元]",
                            "1003"=>"金德水讲话[0.36元]",
                            "1004"=>"TPP协议[0.66元]",
                        );
                        $price=array(
                            "1001"=>0.54,
                            "1002"=>4.8,
                            "1003"=>0.36,
                            "1004"=>0.66,
                        );
                        for ($i=0;$i<count($print);$i++){
                            echo $source[$print[$i]]."<br/>";
                            $dayin=$dayin.$print[$i]." ";
                            $pr+=$price[$print[$i]];
                        }
                        ?>
                    </div>
                    <div class="panel-footer">金额总计：<?php  echo $pr."元"; ?></div>
                </div>
                <form style="text-align: center" action="mainhandle2.php" method="post" id="print-form" enctype="multipart/form-data">
                    <input style="display: none" name="temp" value="<?php echo $dayin; ?>">
                    <input style="display: none" name="pr" value="<?php echo $pr; ?>">
                    <div class="col-sm-12" style="height: 45px;">
                        <div class="col-sm-2 col-sm-offset-2 xiangyinglabel" style="position: relative;  top:5px;"><b>电话确认</b></div>
                        <div class="col-sm-7">
                            <input type="text"  id="phone" class="form-control" name="phone" value="<?php echo $pho; ?>">
                        </div>
                        <div class="col-sm-1"></div>
                    </div><br/><br/><br/>
                    <div class="col-sm-12" style="height: 45px;">
                        <div class="col-sm-2 col-sm-offset-2 xiangyinglabel" style="position: relative;  top:5px;" ><b>地址确认</b></div>
                        <div class="col-sm-7">
                            <input type="text"  id="address" class="form-control" name="address" value="<?php echo $add; ?>">
                        </div>
                        <div class="col-sm-1"></div>
                    </div><br/><br/><br/>
                    <div class="col-sm-12" style="height: 45px;">
                        <div class="col-sm-2 col-sm-offset-2"  style="position: relative;  top:5px;">
                            <b class="xiangyinglabel">
                                份数确认
                            </b>
                        </div>
                        <div class="col-sm-7">
                            <input type="number" id="number" class="form-control" name="number" value="1">
                        </div>
                        <div class="col-sm-1"></div>
                    </div><br/><br/><br/>

                    <div class="col-sm-12" style="height: 45px;">
                        <div class="col-sm-2 col-sm-offset-2 xiangyinglabel" style="position: relative;  top:5px;"><b>备注</b></div>
                        <div class="col-sm-7">
                            <input type="text"  id="beizhu" class="form-control"  value="立即配送"  name="beizhu">

                        </div>
                        <div class="col-sm-1"></div>
                    </div><br/><br/><br/>
                    <div style="position: relative;display: block;left: 6%;" >
                        <label style="text-align: center;margin: auto;padding: auto;" >a a a a
                            <input type="checkbox" name="agree"><a href="#"  data-toggle="modal" data-target="#about-modal" id="tagger4"> 已经阅读并同意付款协议&nbsp;&nbsp;</a>

                        </label>
                    </div>
                    <br/>
                    <input type="submit" class="btn btn-info"  value="打印" id="subprint" style="width: 60%;margin-left: 25%;margin-right: 15%;">
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include  "footer.php";
?>
<script>
    $(function(){
        $('.lab-class').labelauty();
    });
</script>

<div class="modal fade" id="about-modal" tabindex="-1" role="dialog" aria-labelledby="modal-label"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span
                        aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
                <h4 class="modal-title" id="modal-label">付款规则</h4>
            </div>
            <div class="modal-body">
                <p style="text-indent: 2em">
                    <b>黑白</b> <span style="color:#ff0000;">0.06元/单面，0.1元/双面</span>,
                    <b> 彩打 </b>  <span style="color:#ff0000;"> 0.6元/单面，1元/双面.</span><br/>
                </p><p style="text-indent: 2em">服务时间1个小时内送至信箱或指定位置<BR/>
                </p><p style="text-indent: 2em">服务时间：周一至周五 17：30-23:30
                    周六至周末 6:00-23:30                </p>
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

        $("#subprint").validate({
            submitHandler:function(form){
                form.submit();
            }
        });

        $("#print-form").validate({
            rules: {
                phone: {
                    required:true,
                    minlength:6
                },
                address: {
                    required: true,
                    minlength: 3
                },
                number: {
                    number: true
                },
                agree:{
                    required:true
                }

            },
            messages: {
                phone: {
                    required:"电话必填",
                    minlength:"请填入符合规范的电话"
                },
                address: {
                    required: "请输入地址",
                    minlength: "请填入符合规范的地址"
                },
                number: {
                    number:"请输入数字"
                },
                agree:{
                    required:"请您阅读条款"
                }

            }
        });

    });
</script>

</body>
</html>