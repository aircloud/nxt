åååååå<?php
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
    <meta name="baidu-site-verification" content="JtMVgAGBnW" />
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

    <!--    <div class="col-lg-4" style="min-height: 400px;">-->
    <!--        <br/><br/>-->
    <!--        <img id="change1"src="images/zhifubao2.png">-->
    <!--        <br/><br/>-->
    <!--        <img id="change2"src="images/moneydia.png" style="width:100%;">-->
    <!--    </div>-->
    <div class="col-lg-12" style="min-height: 860px">
        <div class="panel panel-info" style="width: 80%;margin-top:5%;margin-left:10%;height: 1000px;border-top: 5px solid #00ccff">
            <div class="panel-heading"><h4 style="color:#337AB7">打印设置</h4></div>
            <div class="panel-body">
                <form style="text-align: center" action="mainhandle.php" method="post" id="print-form" enctype="multipart/form-data">
                    <div style="border-bottom: 2px solid #cccccc"><h5 STYLE="color:#337AB7;">基本信息</h5></div><br/><br/>
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
                    <div style="border-bottom: 2px solid #cccccc"><h5 STYLE="color:#337AB7;">文件信息</h5></div><br/><br/>


                    <div style="text-align: center">
                        <div class="col-sm-2 col-sm-offset-2" style="position: relative;  top:5px;">
                            <b>
                                <label for="file" class="xiangyinglabel" style="position: relative;left:7px;">文件</label>
                            </b>
                        </div>
                        <div class="col-sm-7">
                            <input type="file" name="file" id="fååååilein" class="btn btn-default" placeholder="大小超过10M请最下方qq联系我们" onblur="test()" style="position: relative;left: 2%;" />
                            <span style="display: none;font-size: 12px;color:red;" id="filespan">文件大小超过10M请底部联系qq客服</span>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                    <br/><br/><br/>
                    <!--                    <div class="col-sm-12" style="height: 45px;">-->
                    <!--                        <div class="col-sm-2 col-sm-offset-2 xiangyinglabel" style="position: relative;  top:5px;"><b>页数总计</b></div>-->
                    <!--                        <div class="col-sm-7">-->
                    <!--                            <input type="number"  id="yeshu" class="form-control"  placeholder=请您计算好总共打印出的页数谢谢！  name="yeshu">-->
                    <!---->
                    <!--                        </div>-->
                    <!--                        <div class="col-sm-1"></div>-->
                    <!--                    </div><br/><br/><br/>-->


                    <div style="border-bottom: 2px solid #cccccc"><h5 STYLE="color:#337AB7;">打印信息</h5></div><br/><br/>

                    <div class="col-sm-12" style="height: 45px;">
                        <div class="col-sm-2 col-sm-offset-2 xiangyinglabel" style="position: relative;  top:5px;" ><b>版数</b></div>
                        <div class="col-sm-7">
                            <select class="form-control" name="banshu">
                                <option value="每页一版">每页一版</option>
                                <option value="横向两版">横向两版</option>
                                <option value="横向四版">横向四版</option>
                                <option value="横向六版">横向六版</option>
                                <option value="横向九版">横向九版</option>
                                <option value="纵向九版">纵向九版</option>
                            </select>
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



                    <ul class="list-group " style="margin-bottom: 0;">
                        <li><input type="radio" class="lab-class" name="print" id="danmian" value="单面打印" checked data-labelauty="单面打印"></li>
                        <li><input type="radio" class="lab-class" name="print" id="shuang"  value="双面打印" data-labelauty="双面打印"></li>
                    </ul>
                    <ul class="list-group " style="margin-bottom: 0;">
                        <li><input type="radio" class="lab-class" name="method" id="liji" value="立即配送" checked data-labelauty="立即配送"></li>
                        <li><input type="radio" class="lab-class" name="method" id="peisong" value="定时配送"  data-labelauty="定时配送"></li>
                    </ul>
                    <div class="col-sm-12" style="height: 0px;display: none" id="peisongtime" >
                        <div class="col-sm-2 col-sm-offset-2 xiangyinglabel" style="position: relative;  top:5px;" id="peitime1"><b>配送时间</b></div>
                        <div class="col-sm-7">
                            <select class="form-control" name="peisongtime" id="peitime2">
                                <option value="立即配送">立即配送</option>
                                <option value="今日九点前">今日九点前</option>
                                <option value="今日十点前">今日十点前</option>
                                <option value="今日十一点前">今日十一点前</option>
                                <option value="今日十二点前">今日十二点前</option>
                                <option value="今日十三点前">今日十三点前</option>
                                <option value="今日十四点前">今日十四点前</option>
                                <option value="今日十五点前">今日十五点前</option>
                                <option value="今日十六点前">今日十六点前</option>
                                <option value="今日十七点前">今日十七点前</option>
                                <option value="今日十八点前">今日十八点前</option>
                                <option value="今日十九点前">今日十九点前</option>
                                <option value="今日二十点前">今日二十点前</option>
                                <option value="今日二十一点前">今日二十一点前</option>
                                <option value="今日二十二点前">今日二十二点前</option>
                                <option value="今日二十三点前">今日二十三点前</option>
                                <option value="明日九点前">明日九点前</option>
                            </select>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                    <ul class="list-group " style="margin-bottom: 0;">
                        <li><input type="radio" class="lab-class" name="color" id="caise" value="彩色" data-labelauty="彩色"></li>
                        <li><input type="radio" class="lab-class" name="color" id="heibai" value="黑白" checked data-labelauty="黑白"></li>
                    </ul><b><span style="position: absolute; left:65%; top:748px;display: block;color:darkgreen !important;" id="spantip"  >提示:0.06元一页</span></b>

                    <!--                    <div style="text-align: center">-->
                    <!--                        <div class="col-sm-2 col-sm-offset-2" style="position: relative;  top:5px;">-->
                    <!--                            <b>-->
                    <!--                                <label for="file" class="xiangyinglabel" style="position: relative;left:7px;">文件</label>-->
                    <!--                            </b>-->
                    <!--                        </div>-->
                    <!--                        <div class="col-sm-7">-->
                    <!--                            <input type="file" name="file" id="filein" class="btn btn-default" placeholder="大小超过10M请最下方qq联系我们"  style="position: relative;left: 2%;"  id="file" />-->
                    <!--                            <span style="display: none;font-size: 12px;color:red;" id="filespan">文件大小超过10M请底部联系qq客服</span>-->
                    <!--                        </div>-->
                    <!--                        <div class="col-sm-1"></div>-->
                    <!--                    </div>-->
                    <!--                    <br/><br/><br/>-->
                    <div class="col-sm-12" style="height: 45px;">
                        <div class="col-sm-2 col-sm-offset-2 xiangyinglabel" style="position: relative;  top:5px;"><b>备注</b></div>
                        <div class="col-sm-7">
                            <input type="text"  id="beizhu" class="form-control"  placeholder=更多问题或合作需求请直到底部在线客服  name="beizhu">

                        </div>
                        <div class="col-sm-1"></div>
                    </div><br/><br/><br/>
                    <div style="position: relative;display: block;left: 6%;" >
                        <label style="text-align: center;margin: auto;padding: auto;" >
                            <input type="checkbox" name="agree"><a href="#"  data-toggle="modal" data-target="#about-modal" id="tagger4"> 已经阅读并同意付款协议&nbsp;&nbsp;</a>

                        </label>
                    </div>
                    <br/>
                    <input type="submit" class="btn btn-info" onclick="test()"  value="打印" id="subprint" style="width: 60%;margin-left: 25%;margin-right: 15%;">
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

<script>
    function test(){
        var temp=document.getElementById("filein").files[0].size;
        temp=temp/1024;
        if(temp>10000){
            alert("文件稍大了哦，请直接底部联系qq客服");
        }
    }
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
        var i=0;
        var j=1;

        $("#danmian").on("click",function(){
            if(j==1) {
                i=0;
                $("#spantip").html("提示:0.06元一页").css("display", "block");
            }
            else {
//                alert($("label[for='caise'] span:first-child").css("display"));
                $("#spantip").html("提示:0.6元一页").css("display", "block");
                i=0;
            }
        });

        $("#filein").on("mouseover",function(){
            $("#filespan").css("display","block");
        });

        $("#filein").on("mouseout",function(){
            $("#filespan").css("display","none");
        });

        $("#shuang").on("click",function(){
            if(j==1)
            {
                $("#spantip").html("提示:0.1元双面").css("display","block");
                i=1;
            }
            else {
//                alert($("label[for='caise'] span:first-child").css("display"));
                i=1;
                $("#spantip").html("提示:1元双面").css("display", "block");
            }
        });

        $("#caise").on("click",function(){
            if(i==0) {
                $("#spantip").html("提示:0.6元一页").css("display", "block");
                j=0;
            }
            else {
                $("#spantip").html("提示:1元双面").css("display", "block");
                j=0;
            }
        });
        $("#heibai").on("click",function(){
            if(i==0) {
                $("#spantip").html("提示:0.06元一页").css("display", "block");
                j=1;
            }
            else {
                $("#spantip").html("提示:0.1元双面").css("display", "block");
                j=1;
            }
        });

        $("#liji").on("click",function(){
//            $("#spantip2").html("一小时内送达");
            $("#peisongtime").css({"display":"none","height":"0px"});
            $("#peitime1").css("height","0px");
            $("#peitime2").css("height","0px");
        });
        $("#peisong").on("click",function(){
            $("#peisongtime").css({"display":"block","height":"45px"});
            $("#peitime1").css("height","auto");
            $("#peitime2").css("height","34px");

        });

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
                file:{
                    required:true
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
                file: {
                    required:"请上传文件"
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