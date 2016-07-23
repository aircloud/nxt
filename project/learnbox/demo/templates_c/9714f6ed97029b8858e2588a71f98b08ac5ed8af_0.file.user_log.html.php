<?php /* Smarty version 3.1.27, created on 2015-09-01 19:53:43
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/neo/demo/templates/user_log.html" */ ?>
<?php
/*%%SmartyHeaderCode:167375680455e591c7a480e4_69740391%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9714f6ed97029b8858e2588a71f98b08ac5ed8af' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/neo/demo/templates/user_log.html',
      1 => 1441108421,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167375680455e591c7a480e4_69740391',
  'variables' => 
  array (
    'tempname' => 0,
    'user_logs' => 0,
    'this_user_log' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e591c7aa8c25_20342230',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e591c7aa8c25_20342230')) {
function content_55e591c7aa8c25_20342230 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '167375680455e591c7a480e4_69740391';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户纪录</title>
</head>
<link href="templates/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="templates/css/main.css" rel="stylesheet" type="text/css">
<?php echo '<script'; ?>
 src="templates/js/jquery-2.1.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!--<?php echo '<script'; ?>
 src="templates/js/jquery.validate.min.js"><?php echo '</script'; ?>
>-->
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
<div class="container"><br/>
    <div>您的申请纪录如下表：</div>
    <table class="table table-hover">
        <tr>
            <th>姓名</th>
            <th>学号</th>
            <th>电话</th>
            <th>类别</th>
            <th>年</th>
            <th>月</th>
            <th>日</th>
            <th>开始时间</th>
            <th>结束时间</th>
            <th>操作</th>
        </tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['user_logs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['this_user_log'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['this_user_log']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['this_user_log']->value) {
$_smarty_tpl->tpl_vars['this_user_log']->_loop = true;
$foreach_this_user_log_Sav = $_smarty_tpl->tpl_vars['this_user_log'];
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['this_user_log']->value['username'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['this_user_log']->value['requireid'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['this_user_log']->value['mobile'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['this_user_log']->value['roomid'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['this_user_log']->value['year'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['this_user_log']->value['month'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['this_user_log']->value['day'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['this_user_log']->value['begin'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['this_user_log']->value['end'];?>
</td>
            <td><a href="user_log.php?final_id=<?php echo $_smarty_tpl->tpl_vars['this_user_log']->value['id'];?>
">撤销纪录</a></td>
        </tr>
        <?php
$_smarty_tpl->tpl_vars['this_user_log'] = $foreach_this_user_log_Sav;
}
?>
    </table>
</div>
</body>
</html><?php }
}
?>