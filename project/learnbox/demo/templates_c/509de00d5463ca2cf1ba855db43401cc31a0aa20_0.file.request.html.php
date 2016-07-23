<?php /* Smarty version 3.1.27, created on 2015-11-04 18:12:56
         compiled from "/data/home/hyu1845130001/htdocs/neo/demo/templates/request.html" */ ?>
<?php
/*%%SmartyHeaderCode:8593787705639da28ef7c85_14978244%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '509de00d5463ca2cf1ba855db43401cc31a0aa20' => 
    array (
      0 => '/data/home/hyu1845130001/htdocs/neo/demo/templates/request.html',
      1 => 1446631948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8593787705639da28ef7c85_14978244',
  'variables' => 
  array (
    'login' => 0,
    'tempname' => 0,
    'roomcolor' => 0,
    'time' => 0,
    'thistime' => 0,
    'day' => 0,
    'user_info' => 0,
    'this_use_info' => 0,
    'function' => 0,
    'ppic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5639da290618a0_00115266',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5639da290618a0_00115266')) {
function content_5639da290618a0_00115266 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8593787705639da28ef7c85_14978244';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice-width,initial-scale=0.55,user-scalable=no,maximum-scale=0.55">

    <title>NeoSpace</title>
    <link href="templates/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="templates/css/main.css" rel="stylesheet" type="text/css">
    <?php echo '<script'; ?>
 src="templates/js/jquery-2.1.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="templates/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="templates/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
</head>
<body>

<div class="headerdiv">
    <img src="templates/images/neospace.png" style="width: 200px;">
    <span style="color: white;font-size:30px;position: relative;top:12px;" class="title_text">会议室预约系统</span>

    <div class="login_div" style="color: darkblue">
        <?php if ($_smarty_tpl->tpl_vars['login']->value == 'no') {?>
        <A><button onclick="showlogin()" class="btn btn-small btn-info" style="border-radius: 2px;margin:0;font-weight: 600">注册</button></A>
        <A><button onclick="showrequest()" class="btn btn-small btn-info" style="border-radius: 2px;margin:0;font-weight: 600">登陆</button></A>
        <form action="request.php" method="post" id="login" style="display:none;padding: 5px;">
            <input style="border-radius: 2px" class="form-control" type="text" name="name_l" placeholder="请输入手机号">
            <input style="border-radius: 2px" class="form-control" type="password" name="password_l" PLACEHOLDER="请输入密码">
            <input style="border-radius: 2px" type="submit" id="submit_lo" class="form-control">
            <a style="font-size:12px;color:orange" onclick="hideall()">隐藏</a>
        </form>
        <form action="new_user.php" method="post" id="request" style="display:none;padding: 5px;">
            <input style="border-radius: 2px" class="form-control"  type="text" name="name_r" placeholder="请输入手机号">
            <input style="border-radius: 2px" class="form-control" type="password" name="password_r" PLACEHOLDER="请输入密码">
            <input style="border-radius: 2px" class="form-control" type="text" name="code_r" placeholder="请输入验证码">
            <input style="border-radius: 2px" class="btn btn-small btn-default" type="button" id="btn" value="免费获取验证码" onclick="timethis()">
            <input style="border-radius: 2px" type="submit" class="btn btn-small btn-info" value="submit" id="submit_re">
            <br/><a style="font-size:12px;color:orange" onclick="hideall()">隐藏</a>
            <?php echo '<script'; ?>
>
                function timethis(o) {
                    var step = 59;

                    $.get("daunxin.php",{ mobile:$("input[name='name_r']").val()},function(data){
                        if(data['code']==2)alert("请输入手机号");
                    },'json');
                    $('#btn').val('重新发送60');
                    var _res = setInterval(function()
                    {
                        $("#btn").attr("disabled", true);//设置disabled属性
                        $('#btn').val('重新发送'+step);
                        step-=1;
                        if(step <= 0){
                            $("#btn").removeAttr("disabled"); //移除disabled属性
                            $('#btn').val('获取验证码');
                            clearInterval(_res);//清除setInterval
                        }
                    },1000);
                }

            <?php echo '</script'; ?>
>    </form>

        <?php } else { ?>
        <a href="temp_user.php">欢迎你,<?php echo $_smarty_tpl->tpl_vars['tempname']->value;?>
</a>
        <a href="request.php?tuichu=1">退出</a>
        <?php }?>
    </div>
</div>
<div class="container">
<br/>
<div style="width: 90%;float: left;height: auto;text-align: center;">
    <a class="no_a" href="request.php?roomid=1" style="color:<?php echo $_smarty_tpl->tpl_vars['roomcolor']->value[0];?>
;border:2px solid <?php echo $_smarty_tpl->tpl_vars['roomcolor']->value[0];?>
;padding: 5px;float: left;width: 15%;margin-left:11%;" >第一会议室</a>
    <a class="no_a" href="request.php?roomid=2" style="color:<?php echo $_smarty_tpl->tpl_vars['roomcolor']->value[1];?>
;border:2px solid <?php echo $_smarty_tpl->tpl_vars['roomcolor']->value[1];?>
;padding: 5px;float: left;width: 15%" >第二会议室</a>
    <a class="no_a" href="request.php?roomid=3" style="color:<?php echo $_smarty_tpl->tpl_vars['roomcolor']->value[2];?>
;border:2px solid <?php echo $_smarty_tpl->tpl_vars['roomcolor']->value[2];?>
;padding: 5px;float: left;width: 15%" >第三会议室</a>
    <a class="no_a" href="request.php?roomid=4" style="color:<?php echo $_smarty_tpl->tpl_vars['roomcolor']->value[3];?>
;border:2px solid <?php echo $_smarty_tpl->tpl_vars['roomcolor']->value[3];?>
;padding: 5px;float: left;width: 15%" >第四会议室</a>
    <a class="no_a" href="request.php?roomid=5" style="color:<?php echo $_smarty_tpl->tpl_vars['roomcolor']->value[4];?>
;border:2px solid <?php echo $_smarty_tpl->tpl_vars['roomcolor']->value[4];?>
;padding: 5px;float: left;width: 15%" >第五会议室</a>
</div>
<br/>

        <br/>
<br/>
    <div style="width: 10%;float: left;clear:both;height: 60px;text-align: center;display: inline;padding-top: 10px;">
        <span>&nbsp;</span>
    </div>
    <div style="width: 90%;float: left;clear: right;height: 60px;display: inline;">
    <table style="min-width:100px;height: auto;text-align: center;padding:0;" class="table">
        <tr>
            <?php
$_from = $_smarty_tpl->tpl_vars['time']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['thistime'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['thistime']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['thistime']->value) {
$_smarty_tpl->tpl_vars['thistime']->_loop = true;
$foreach_thistime_Sav = $_smarty_tpl->tpl_vars['thistime'];
?>
            <td style="width:5.14285%;padding:0;"><?php echo $_smarty_tpl->tpl_vars['thistime']->value;?>
</td>
            <?php
$_smarty_tpl->tpl_vars['thistime'] = $foreach_thistime_Sav;
}
?>
        </tr>
    </table>
    </div>

    <div style="width: 10%;float: left;clear:both;height: 60px;text-align: center;display: inline;padding-top: 10px;">
        <span><?php echo $_smarty_tpl->tpl_vars['day']->value[0];?>
</span>
    </div>
    <div style="width: 90%;float: left;clear: right;height: auto">
        <div class="progress" style="height: 40px;border-radius: 0;">
            <?php
$_from = $_smarty_tpl->tpl_vars['user_info']->value[0]['array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['this_use_info'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['this_use_info']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['this_use_info']->value) {
$_smarty_tpl->tpl_vars['this_use_info']->_loop = true;
$foreach_this_use_info_Sav = $_smarty_tpl->tpl_vars['this_use_info'];
?>
            <div class="progress-bar" style="width: 2.85714%;background-color:<?php echo $_smarty_tpl->tpl_vars['this_use_info']->value['color'];?>
;" title="<?php echo $_smarty_tpl->tpl_vars['this_use_info']->value['type'];?>
">
            </div>
            <?php
$_smarty_tpl->tpl_vars['this_use_info'] = $foreach_this_use_info_Sav;
}
?>
        </div>
    </div>
    <div style="width: 10%;float: left;clear:both;height: 60px;text-align: center;display: inline;padding-top: 10px;">
        <span><?php echo $_smarty_tpl->tpl_vars['day']->value[1];?>
</span>
    </div>
    <div style="width: 90%;float: left;clear: right;height: auto">
        <div class="progress" style="height: 40px;border-radius: 0;">
            <?php
$_from = $_smarty_tpl->tpl_vars['user_info']->value[1]['array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['this_use_info'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['this_use_info']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['this_use_info']->value) {
$_smarty_tpl->tpl_vars['this_use_info']->_loop = true;
$foreach_this_use_info_Sav = $_smarty_tpl->tpl_vars['this_use_info'];
?>
            <div class="progress-bar" style="width: 2.85714%;background-color:<?php echo $_smarty_tpl->tpl_vars['this_use_info']->value['color'];?>
;" title="<?php echo $_smarty_tpl->tpl_vars['this_use_info']->value['type'];?>
">
            </div>
            <?php
$_smarty_tpl->tpl_vars['this_use_info'] = $foreach_this_use_info_Sav;
}
?>
        </div>
    </div>
    <div style="width: 10%;float: left;clear:both;height: 60px;text-align: center;display: inline;padding-top: 10px;">
        <span><?php echo $_smarty_tpl->tpl_vars['day']->value[2];?>
</span>
    </div>
    <div style="width: 90%;float: left;clear: right;height: auto">
        <div class="progress" style="height: 40px;border-radius: 0;">
            <?php
$_from = $_smarty_tpl->tpl_vars['user_info']->value[2]['array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['this_use_info'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['this_use_info']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['this_use_info']->value) {
$_smarty_tpl->tpl_vars['this_use_info']->_loop = true;
$foreach_this_use_info_Sav = $_smarty_tpl->tpl_vars['this_use_info'];
?>
            <div class="progress-bar" style="width: 2.85714%;background-color:<?php echo $_smarty_tpl->tpl_vars['this_use_info']->value['color'];?>
;" title="<?php echo $_smarty_tpl->tpl_vars['this_use_info']->value['type'];?>
">
            </div>
            <?php
$_smarty_tpl->tpl_vars['this_use_info'] = $foreach_this_use_info_Sav;
}
?>
        </div>
    </div>
    <div style="width: 10%;float: left;clear:both;height: 60px;text-align: center;display: inline;padding-top: 10px;">
        <span><?php echo $_smarty_tpl->tpl_vars['day']->value[3];?>
</span>
    </div>
    <div style="width: 90%;float: left;clear: right;height: auto">
        <div class="progress" style="height: 40px;border-radius: 0;">
            <?php
$_from = $_smarty_tpl->tpl_vars['user_info']->value[3]['array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['this_use_info'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['this_use_info']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['this_use_info']->value) {
$_smarty_tpl->tpl_vars['this_use_info']->_loop = true;
$foreach_this_use_info_Sav = $_smarty_tpl->tpl_vars['this_use_info'];
?>
            <div class="progress-bar" style="width: 2.85714%;background-color:<?php echo $_smarty_tpl->tpl_vars['this_use_info']->value['color'];?>
;" title="<?php echo $_smarty_tpl->tpl_vars['this_use_info']->value['type'];?>
">
            </div>
            <?php
$_smarty_tpl->tpl_vars['this_use_info'] = $foreach_this_use_info_Sav;
}
?>
        </div>
    </div>
    <div style="width: 10%;float: left;clear:both;height: 60px;text-align: center;display: inline;padding-top: 10px;">
        <span><?php echo $_smarty_tpl->tpl_vars['day']->value[4];?>
</span>
    </div>
    <div style="width: 90%;float: left;clear: right;height: auto">
        <div class="progress" style="height: 40px;border-radius: 0;">
            <?php
$_from = $_smarty_tpl->tpl_vars['user_info']->value[4]['array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['this_use_info'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['this_use_info']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['this_use_info']->value) {
$_smarty_tpl->tpl_vars['this_use_info']->_loop = true;
$foreach_this_use_info_Sav = $_smarty_tpl->tpl_vars['this_use_info'];
?>
            <div class="progress-bar" style="width: 2.85714%;background-color:<?php echo $_smarty_tpl->tpl_vars['this_use_info']->value['color'];?>
;" title="<?php echo $_smarty_tpl->tpl_vars['this_use_info']->value['type'];?>
">
            </div>
            <?php
$_smarty_tpl->tpl_vars['this_use_info'] = $foreach_this_use_info_Sav;
}
?>
        </div>
    </div>
    <div style="width: 10%;float: left;clear:both;height: 60px;text-align: center;display: inline;padding-top: 10px;">
        <span><?php echo $_smarty_tpl->tpl_vars['day']->value[5];?>
</span>
    </div>
    <div style="width: 90%;float: left;clear: right;height: auto">
        <div class="progress" style="height: 40px;border-radius: 0;">
            <?php
$_from = $_smarty_tpl->tpl_vars['user_info']->value[5]['array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['this_use_info'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['this_use_info']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['this_use_info']->value) {
$_smarty_tpl->tpl_vars['this_use_info']->_loop = true;
$foreach_this_use_info_Sav = $_smarty_tpl->tpl_vars['this_use_info'];
?>
            <div class="progress-bar" style="width: 2.85714%;background-color:<?php echo $_smarty_tpl->tpl_vars['this_use_info']->value['color'];?>
;" title="<?php echo $_smarty_tpl->tpl_vars['this_use_info']->value['type'];?>
">
            </div>
            <?php
$_smarty_tpl->tpl_vars['this_use_info'] = $foreach_this_use_info_Sav;
}
?>
        </div>
    </div>
    <div style="width: 10%;float: left;clear:both;height: 60px;text-align: center;display: inline;padding-top: 10px;">
        <span><?php echo $_smarty_tpl->tpl_vars['day']->value[6];?>
</span>
    </div>
    <div style="width: 90%;float: left;clear: right;height: auto">
        <div class="progress" style="height: 40px;border-radius: 0;">
            <?php
$_from = $_smarty_tpl->tpl_vars['user_info']->value[6]['array'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['this_use_info'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['this_use_info']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['this_use_info']->value) {
$_smarty_tpl->tpl_vars['this_use_info']->_loop = true;
$foreach_this_use_info_Sav = $_smarty_tpl->tpl_vars['this_use_info'];
?>
            <div class="progress-bar" style="width: 2.85714%;background-color:<?php echo $_smarty_tpl->tpl_vars['this_use_info']->value['color'];?>
;" title="<?php echo $_smarty_tpl->tpl_vars['this_use_info']->value['type'];?>
">
            </div>
            <?php
$_smarty_tpl->tpl_vars['this_use_info'] = $foreach_this_use_info_Sav;
}
?>
        </div>
    </div>
</div>
<button onclick="<?php echo $_smarty_tpl->tpl_vars['function']->value;?>
" style="clear: both;position: relative;left:50px;top:5px;margin-left:12%;border-radius: 0;" class="btn btn-info">我要预约</button>
<BR/>
<BR/>
<div style="width: 90%;float: left;height: auto;text-align: center;">
    <img src="templates/images/<?php echo $_smarty_tpl->tpl_vars['ppic']->value;?>
.jpg" style="padding: 5px;float: left;width: 75%;margin-left:20%;">
</div>
</body>
<?php echo '<script'; ?>
>
    $().ready(function(){
        $("#submit_lo").validate({
            submitHandler:function(form){
                form.submit();
            }
        });
        $("#login").validate({
            rules:{
                name_l:{
                    required:true,
                    remote:{
                        url:"test4.php",
                        type:"post",
                        dataType:"json",
                        data:{
                            name_l:function(){
                                return $("input[name='name_l']").val();
                            }
                        },
                        dataFilter: function(data) {
                            if (data == "yes"){
                                return true;}
                            else
                                return false;
                        }
                    }
                },
                password_l:{
                    remote:{
                        url:"test5.php",
                        type:"post",
                        dataType:"json",
                        data:{
                            name_l:function(){
                                return $("input[name='name_l']").val();
                            },
                            password_l:function(){
                                return $("input[name='password_l']").val();
                            }
                        },
                        dataFilter: function(data) {
                            if (data == "yes"){
                                return true;}
                            else
                                return false;
                        }
                    },
                    required:true
                }
            },
            messages:{
                name_l:{
                    required:"手机号或者用户名不能为空",
                    remote:"用户名不存在"
                },
                password_l:{
                    remote:"密码错误",
                    required:"请输入密码"
                }
            }
        });


        $("#submit_re").validate({
            submitHandler:function(form){
                form.submit();
            }
        });
        $("#request").validate({
            rules:{
                name_r:{
                    required:true,
                    remote:{
                        url:"test6.php",
                        type:"post",
                        dataType:"json",
                        data:{
                            name_r:function(){
                                return $("input[name='name_r']").val();
                            }
                        },
                        dataFilter: function(data) {
                            if (data == "yes"){
                                return true;}
                            else
                                return false;
                        }
                    },
                    minlength:11
                },
                password_r:{
                    required:true,
                    minlength:6
                },
                code_r:{
                    required:true,
                    remote:{
                        url:"test3.php",
                        type:"post",
                        dataType:"json",
                        data:{
                            codein:function(){
                                return $("input[name='code_r']").val();
                            }
                        },
                        dataFilter: function(data) {
                            if (data == "yes"){
                                return true;}
                            else
                                return false;
                        }
                    }
                }
            },
            messages: {
                name_r: {
                    required: "手机号或者用户名不能为空",
                    remote: "该手机号已被注册",
                    minlength:"请输入手机长号"
                },
                password_r: {
                    required: "请您输入密码",
                    minlength: "密码过于简单"
                },
                code_r:{
                    required:"请输入验证码",
                    remote:"验证码不正确"
                }

            }

        });

    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function locationing(){
        location.assign("meeting.php");
    }

    function login(){
        alert("请先登录");
    }

    $(".container").onclick=function(){
        $("#login").hide();
        $("#request").hide();
    };

    function showlogin(event){
        $("#request").show();
        $("#login").hide();
    }

    function hideall(){
        $("#login").hide();
        $("#request").hide();

    }

    function showrequest(event){
        $("#login").show();
        $("#request").hide();
    }

<?php echo '</script'; ?>
>


</html><?php }
}
?>