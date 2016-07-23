<?php /* Smarty version 3.1.27, created on 2015-11-04 18:13:00
         compiled from "/data/home/hyu1845130001/htdocs/neo/demo/templates/meeting.html" */ ?>
<?php
/*%%SmartyHeaderCode:14748959845639da2ce93a90_94142583%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87b404f1725556e791c7bed7f90e2f765a82a4a0' => 
    array (
      0 => '/data/home/hyu1845130001/htdocs/neo/demo/templates/meeting.html',
      1 => 1446631948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14748959845639da2ce93a90_94142583',
  'variables' => 
  array (
    'tempname' => 0,
    'year' => 0,
    'thisyear' => 0,
    'month' => 0,
    'thismonth' => 0,
    'day' => 0,
    'thisday' => 0,
    'begin' => 0,
    'thisbegin' => 0,
    'end' => 0,
    'thisend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5639da2cef68b5_03480507',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5639da2cef68b5_03480507')) {
function content_5639da2cef68b5_03480507 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14748959845639da2ce93a90_94142583';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice-width,initial-scale=0.55,user-scalable=no,maximum-scale=0.55">

    <title>申请场地</title>
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
<body >
<div class="headerdiv" >
    <img src="templates/images/neospace.png" style="width: 200px;">
    <span style="color: white;font-size:30px;position: relative;top:12px;" class="title_text">会议室预约系统</span>
    <div class="login_div">
        <a href="temp_user.php">欢迎你,<?php echo $_smarty_tpl->tpl_vars['tempname']->value;?>
</a>
        <a href="request.php?tuichu=1">退出</a>
    </div>
</div>
<div  style="background-color:#dddddd;height:auto;">
    <div class="container"  >
        <div id="yu_div" style="background-color: white;padding: 10px;">
            <form method="post" action="answer.php" id="yuyue">
                <select class="form-control"  name="selectyear" style="border-radius: 0;">
                    <?php
$_from = $_smarty_tpl->tpl_vars['year']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['thisyear'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['thisyear']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['thisyear']->value) {
$_smarty_tpl->tpl_vars['thisyear']->_loop = true;
$foreach_thisyear_Sav = $_smarty_tpl->tpl_vars['thisyear'];
?>
                    <option style="border-radius: 0;"><?php echo $_smarty_tpl->tpl_vars['thisyear']->value;?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['thisyear'] = $foreach_thisyear_Sav;
}
?>
                </select>
                <select class="form-control"  name="selectmonth" style="border-radius: 0;">
                    <?php
$_from = $_smarty_tpl->tpl_vars['month']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['thismonth'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['thismonth']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['thismonth']->value) {
$_smarty_tpl->tpl_vars['thismonth']->_loop = true;
$foreach_thismonth_Sav = $_smarty_tpl->tpl_vars['thismonth'];
?>
                    <option style="border-radius: 0;"><?php echo $_smarty_tpl->tpl_vars['thismonth']->value;?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['thismonth'] = $foreach_thismonth_Sav;
}
?>
                </select>
                <select class="form-control"  name="selectday" style="border-radius: 0;">
                    <?php
$_from = $_smarty_tpl->tpl_vars['day']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['thisday'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['thisday']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['thisday']->value) {
$_smarty_tpl->tpl_vars['thisday']->_loop = true;
$foreach_thisday_Sav = $_smarty_tpl->tpl_vars['thisday'];
?>
                    <option style="border-radius: 0;"><?php echo $_smarty_tpl->tpl_vars['thisday']->value;?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['thisday'] = $foreach_thisday_Sav;
}
?>
                </select>
                <div class="input-group">
                    <div class="input-group-addon">开始时间</div>
                    <select class="form-control"  name="selectbegin" style="border-radius: 0;">
                        <?php
$_from = $_smarty_tpl->tpl_vars['begin']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['thisbegin'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['thisbegin']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['thisbegin']->value) {
$_smarty_tpl->tpl_vars['thisbegin']->_loop = true;
$foreach_thisbegin_Sav = $_smarty_tpl->tpl_vars['thisbegin'];
?>
                        <option style="border-radius: 0;"><?php echo $_smarty_tpl->tpl_vars['thisbegin']->value;?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['thisbegin'] = $foreach_thisbegin_Sav;
}
?>
                    </select>
                </div>
                <div class="input-group">
                    <div class="input-group-addon">结束时间</div>
                    <select class="form-control"  name="selectend" style="border-radius: 0;">
                        <?php
$_from = $_smarty_tpl->tpl_vars['end']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['thisend'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['thisend']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['thisend']->value) {
$_smarty_tpl->tpl_vars['thisend']->_loop = true;
$foreach_thisend_Sav = $_smarty_tpl->tpl_vars['thisend'];
?>
                        <option style="border-radius: 0;"><?php echo $_smarty_tpl->tpl_vars['thisend']->value;?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['thisend'] = $foreach_thisend_Sav;
}
?>
                    </select>
                </div>
                <select class="form-control" name="selectroom" style="border-radius: 0;">
                    <option style="border-radius: 0;">一号会议室</option>
                    <option style="border-radius: 0;">二号会议室</option>
                    <option style="border-radius: 0;">三号会议室</option>
                    <option style="border-radius: 0;">四号会议室</option>
                    <option style="border-radius: 0;">五号会议室</option>
                </select>

                <input type="text" class="form-control" placeholder="请写您的姓名" name="user_name" style="border-radius: 0;">
                <input type="text" class="form-control" placeholder="请写您的学号" name="user_number" style="border-radius: 0;">
                <input type="text" class="form-control" placeholder="请写您的手机" name="user_mobile" style="border-radius: 0;">
                <div>
                    <input type="text" class="form-control" placeholder="请写验证码" name="user_code" style="border-radius: 0;float: left;width: 50%;">
                    <input type="button" class="btn btn-default form-control" id="btn" value="免费获取验证码" onclick="timethis()" style="border-radius: 0;float: left;width: 50%;">
                </div>
                <input type="text" class="form-control" placeholder="请如实填写预约原因和预约人员所在团队，否则可能无法通过审核" name="reason" style="border-radius: 0;">
                <input type="submit" class="btn btn-info" value="预约" id="submit_yue" style="border-radius: 0;">
                <?php echo '<script'; ?>
>
                    function timethis(o) {
                        var step = 59;
                        $.get("daunxin.php",{ mobile:$("input[name='user_mobile']").val()},function(data){
                            if(data['code']==2)alert("请输入手机号");
                        },'json');            $('#btn').val('重新发送60');
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
>

            </form>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    $().ready(function(){
        $("#submit_yue").validate({
            submitHandler:function(form){
                form.submit();
            }
        });
        $("#yuyue").validate({
            rules:{
                selectbegin:{
                    remote:{
                        url:"test1.php",
                        type:"post",
                        dataType:"json",
                        data:{
                            yearin:function(){
                                return $("select[name='selectyear']").val();
                            },
                            monthin:function(){
                                return $("select[name='selectmonth']").val();
                            },
                            dayin:function(){
                                return $("select[name='selectday']").val();
                            },
                            beginin:function(){
                                return $("select[name='selectbegin']").val();
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
                selectend:{
                    remote:{
                        url:"test2.php",
                        type:"post",
                        dataType:"json",
                        data:{
                            yearin2:function(){
                                return $("select[name='selectyear']").val();
                            },
                            monthin2:function(){
                                return $("select[name='selectmonth']").val();
                            },
                            dayin2:function(){
                                return $("select[name='selectday']").val();
                            },
                            beginin2:function(){
                                return $("select[name='selectbegin']").val();
                            },
                            endin2:function(){
                                return $("select[name='selectend']").val();
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
                user_number:{
                    required:true,
                    minlength:6
                },
                user_name:{
                    required:true,
                    minlength:2
                },
                user_mobile:{
                    required:true,
                    minlength:5
                },
                user_code:{
                    required:true,
                    remote:{
                        url:"test3.php",
                        type:"post",
                        dataType:"json",
                        data:{
                            codein:function(){
                                return $("input[name='user_code']").val();
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
            messages:{
                selectbegin:{
                    remote:"开始时间和其他团队已预约时间冲突，请重新选择时间"
                },
                selectend:{
                    remote:"您选择的时间和其他团队已预约时间冲突，请重新选择时间"
                },
                user_number:{
                    required:"请填入学号以便确认学生身份",
                    minlength:"请检查您的学号是否正确"
                },
                user_name:{
                    required:"请输入您的姓名",
                    minlength:"请确认姓名完整输入"
                },
                user_mobile:{
                    required:"请输入您的电话",
                    minlength:"请确认您的电话输入正确"
                },
                user_code:{
                    required:"请输入验证码",
                    remote:"验证码错误"
                }

            }
        })
    })


<?php echo '</script'; ?>
>

</body>
</html><?php }
}
?>