<?php /* Smarty version 3.1.27, created on 2015-11-05 11:46:47
         compiled from "/data/home/hyu1845130001/htdocs/neo/demo/templates/success.html" */ ?>
<?php
/*%%SmartyHeaderCode:1388793435563ad1277cf221_54127263%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '368ef405564ffc109275fc33ca13d899307251d5' => 
    array (
      0 => '/data/home/hyu1845130001/htdocs/neo/demo/templates/success.html',
      1 => 1446631948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1388793435563ad1277cf221_54127263',
  'variables' => 
  array (
    'tempname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563ad1277fd8d6_95647501',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563ad1277fd8d6_95647501')) {
function content_563ad1277fd8d6_95647501 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1388793435563ad1277cf221_54127263';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice-width,initial-scale=0.55,user-scalable=no,maximum-scale=0.55">

    <title>申请成功</title>
</head>
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
<body>
<div class="headerdiv" >
    <img src="templates/images/neospace.png" style="width: 200px;">
    <span style="color: white;font-size:30px;position: relative;top:12px;" class="title_text">会议室预约系统</span>
    <div class="login_div">
        <a href="user_index.php">欢迎你,<?php echo $_smarty_tpl->tpl_vars['tempname']->value;?>
</a>
        <a href="request.php?tuichu=1">退出</a>
    </div>
</div>
<div class="container">
    <div>您的申请已经成功提交，待工作人员审核成功后会有短信通知，请注意查收。预约成功后也可在主页以及个人列表页查看</div>
    <a href="request.php">回到主页</a>
</div>
</body>
</html><?php }
}
?>