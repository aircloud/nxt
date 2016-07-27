<?php
session_start();
?>


<!DOCTYPE html>
<html style="min-width: 100px;">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice-width,initial-scale=1.0">
    <title>极速打印</title>
    <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="../css/index.css" type="text/css" rel="stylesheet">
    <link href="../css/jquery-labelauty.css" type="text/css" rel="stylesheet">
    <link href="../css/jquery.mobile-1.4.5.min.css" type="text/css" rel="stylesheet">
    <script src="../js/jquery-2.1.3.min.js"></script>
    <script src="../js/jquery.mobile-1.4.5.min.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <script src="../js/messagecn.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-labelauty.js"></script>
    <style>
        .modal-backdrop{
            background-color: rgba(0,0,0,0.3) !important;
        }
    </style>
</head>

<body>

<div data-role="page">
    <div data-role="header" data-position="fixed"  style="text-align: center;background-color: lightblue">
        <h1><b style="color: darkblue;font-size:18px;">极速打印配送</b></h1>
    </div>
    <div data-role="content">
        <div style="text-align: center">电脑版请访问：<a href="http://www.xiaofeituwen.com">www.xiaofeituwen.com</a><br/>体验更完整功能</div>
        <div style="border-bottom: 2px solid lightblue;color: darkblue">
            <p>基本信息</p>
        </div>
        <form action="mobileaction.php" method="post" id="print-form" enctype="multipart/form-data">
            <div data-role="fieldcontain"data-type="horizontal">
                <input type="text" name="phone" id="phone" value="" placeholder="电话"  />
            </div>
            <div data-role="fieldcontain"data-type="horizontal">
                <input type="text" name="address" id="address" value="" placeholder="地址"  />
            </div>
            <div style="border-bottom: 2px solid lightblue;margin-top:12px;color: darkblue ">
                <p>文件信息</p>
            </div>
            <div data-role="fieldcontain"data-type="horizontal">
                <input type="file" name="file" id="file" value="" placeholder="电话"  />
                <div style="text-align: center">超过10M请到底部直接联系qq客服</div>
            </div>
            <div style="border-bottom: 2px solid lightblue;margin-top:12px;color: darkblue ">
                <p>打印信息</p>
            </div>


            <div data-role="fieldcontain"data-type="horizontal">
                <input type="number" name="number" id="number" value="1份" placeholder="份数"  />
            </div>
            <div data-role="fieldcontain" >
                <select name="banshu" id="select-choice-1" style="height: 20px;">
                    <option value="每页一版">每页一版</option>
                    <option value="横向两版">横向两版</option>
                    <option value="横向四版">横向四版</option>
                    <option value="横向六版">横向六版</option>
                    <option value="横向九版">横向九版</option>
                    <option value="纵向九版">纵向九版</option>
                    <option value="纵向九版">打印成相片</option>
                </select>
            </div>


            <div data-role="fieldcontain">
                <select name="print" id="select-choice-1" style="height: 20px;">
                    <option value="单面">单面</option>
                    <option value="双面">双面</option>
                </select>
            </div>
            <div data-role="fieldcontain">
                <select name="color" id="select-choice-1" style="height: 20px;">
                    <option value="黑白">黑白</option>
                    <option value="彩色">彩色</option>
                </select>
            </div>
            <div data-role="fieldcontain">
                <select name="method" id="select-choice-1" style="height: 20px;">
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
            <div data-role="fieldcontain"data-type="horizontal">
                <input type="text" name="beizhu" id="beizhu" value="" placeholder="备注" style="height: 20px;" />
            </div>

            <div style="position: relative;display: block;" >
                <label style="text-align: center;margin: auto;padding: auto;" >
                    <input type="checkbox" name="agree"><a href="#"  data-toggle="modal" data-target="#about-modal" id="tagger4"> 已经阅读并同意付款协议&nbsp;&nbsp;</a>
                </label>
            </div>


            <button type="submit" id="subprint" class="ui-btn ui-shadow" style="background-color: lightblue">提交</button>
        </form>


        <div class="panel">
            <div class="panel-body">

                <p style="color:#ff0000;text-indent: 2em">付款协议</p>
                <p style="text-indent: 2em">
                    <b>黑白</b> <span style="color:#ff0000;">0.06元/单面，0.1元/双面</span>,
                    <b> 彩打 </b>  <span style="color:#ff0000;"> 0.6元/单面，1元/双面.</span><br/>
                </p><p style="text-indent: 2em">服务时间1个小时内送至信箱或指定位置<BR/>
                </p><p style="text-indent: 2em">目前仅限浙大紫金港<BR/></p>
            </div>
        </div>
    </div>
    <div data-role="footer" data-position="fixed"  style="text-align: center">
        <p style="font-weight: 400">        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2096018319&site=qq&menu=yes""><img border="0" src="http://wpa.qq.com/pa?p=2:2096018319:51" alt="在线客服qq:2096018319" title="在线客服qq:2096018319"/></a >
            <br/>电话:&nbsp;小:18868103563&nbsp;/&nbsp;飞:18868150826</p>
    </div>
</div>


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


<script>
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
</script>
</body>
</html>