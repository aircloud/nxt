<?php /* Smarty version 3.1.27, created on 2015-10-28 09:58:39
         compiled from "/data/home/hyu1845130001/htdocs/neo/demo/templates/user_index.html" */ ?>
<?php
/*%%SmartyHeaderCode:119652624856302bcfb238a1_65289199%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5bc5496fd14f56416cc73267035ced02c632086' => 
    array (
      0 => '/data/home/hyu1845130001/htdocs/neo/demo/templates/user_index.html',
      1 => 1442651605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119652624856302bcfb238a1_65289199',
  'variables' => 
  array (
    'tempname' => 0,
    'user_logs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56302bcfb72e49_41902152',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56302bcfb72e49_41902152')) {
function content_56302bcfb72e49_41902152 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '119652624856302bcfb238a1_65289199';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice-width,initial-scale=0.55,user-scalable=no,maximum-scale=0.55">

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
        <!--<a>欢迎你,<?php echo $_smarty_tpl->tpl_vars['tempname']->value;?>
</a>-->
        <!--<a href="request.php?tuichu=1">退出</a>-->
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
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['name'] = 'sn';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['user_logs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sn']['total']);
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['user_logs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['username'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user_logs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['requireid'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user_logs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['mobile'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user_logs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['roomid'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user_logs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['year'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user_logs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['month'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user_logs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['day'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user_logs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['begin'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user_logs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['end'];?>
</td>
            <td><a href="user_log.php?final_id=<?php echo $_smarty_tpl->tpl_vars['user_logs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sn']['index']]['id'];?>
">撤销纪录</a></td>
        </tr>
        <?php endfor; endif; ?>
    </table>
</div>
</body>
</html><?php }
}
?>