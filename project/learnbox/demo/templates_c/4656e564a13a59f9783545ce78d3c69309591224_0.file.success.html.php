<?php /* Smarty version 3.1.27, created on 2015-09-01 19:02:20
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/neo/demo/templates/success.html" */ ?>
<?php
/*%%SmartyHeaderCode:104765524355e585bc12fa54_65346677%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4656e564a13a59f9783545ce78d3c69309591224' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/neo/demo/templates/success.html',
      1 => 1441104169,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104765524355e585bc12fa54_65346677',
  'variables' => 
  array (
    'tempname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e585bc18c557_99620452',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e585bc18c557_99620452')) {
function content_55e585bc18c557_99620452 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '104765524355e585bc12fa54_65346677';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    <span style="color: white;font-size:30px;position: relative;top:12px;" class="title_text">会议预约系统</span>
    <div class="login_div">
        <a>欢迎你,<?php echo $_smarty_tpl->tpl_vars['tempname']->value;?>
</a>
        <a href="request.php?tuichu=1">退出</a>
    </div>
</div>
<div class="container">
    <div>您的申请已经成功提交，待工作人员审核成功后会有短信通知，请注意查收。</div>
    <a href="request.php">回到主页</a>
</div>
</body>
</html><?php }
}
?>