<?php /* Smarty version 3.1.27, created on 2015-11-21 16:47:23
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/learnbox/demo/templates/CoursesSearch/html/searchResult.html" */ ?>
<?php
/*%%SmartyHeaderCode:4546983435650920b01ec44_84079976%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dc8e1d020996e6232e0f97a0d5bd6b4b520d892' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/learnbox/demo/templates/CoursesSearch/html/searchResult.html',
      1 => 1448120828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4546983435650920b01ec44_84079976',
  'variables' => 
  array (
    'keyword' => 0,
    'baidu' => 0,
    'thisbaidu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5650920b08e7f8_34114055',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5650920b08e7f8_34114055')) {
function content_5650920b08e7f8_34114055 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4546983435650920b01ec44_84079976';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>学习盒子-搜索结果</title>
    <link rel="stylesheet" type="text/css" href="templates/CoursesSearch/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="templates/CoursesSearch/css/init.css">
    <link rel="stylesheet" type="text/css" href="templates/CoursesSearch/css/buttons.css">
    <link rel="stylesheet" type="text/css" href="templates/CoursesSearch/css/searchResult.css">
    <?php echo '<script'; ?>
 src="templates/CoursesSearch/js/jquery-2.1.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="templates/CoursesSearch/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body style="background-attachment: fixed ">
<div class="container-fluid">
    <div class="loginBox row">
        <div class="col-md-10"></div>
        <div class="col-md-2 userBox">
            <img src="templates/CoursesSearch/img/usericon.png" class="fl">
            <a href="#" class="loginLink" data-toggle="modal" data-target="#loginModal">登录</a> /
            <a href="#" class="registerLink" data-toggle="modal" data-target="#registerModal">注册</a>

            <!--<img src="img/usericon.png" class="fl">-->
            <!--<a href="#" class="accountLink">我的盒子</a>-->
            <!--<a href="#" class="loginOut">退出</a>-->
        </div>
    </div>
    <!--modal box-->
    <?php echo '<script'; ?>
 src="templates/CoursesSearch/js/modalBox.js"><?php echo '</script'; ?>
>

    <!--result box-->
    <div class="resultBox">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-1">
                <img class="logo" src="templates/CoursesSearch/img/logo@x2.png">
            </div>
            <div class="col-md-7 searchBox">
                <form action="main.php" method="post">

                    <input type="search" style="border: 1px solid #2789FB" class="search form-control fl" name="search" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
">
                    <button type="submit" style="border: 2px solid #2789FB" class="button button-primary button-square fl"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                </form>

                <div class="cl"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <div class="pedia">
                    <div class="topBox">
                        <div class="decorateBar fl"></div>
                        <span class="title fl"><?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
</span>
                        <div class="cl"></div>
                    </div>
                    <div class="mainBox">
                        <div class="content">
                            Getting more information...
                        </div>
                    </div>
                    <div class="footBox">
                        <img src="templates/CoursesSearch/img/wiki.png" class="wiki">
                        <a href="http://en.wikipedia.org/wiki/<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
">维基百科 Wikipedia.org</a>
                        <img src="templates/CoursesSearch/img/hudong.png" class="hudong">
                        <a href="http://www.baike.com/wiki/<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
">互动百科</a>
                    </div>
                </div>
                <div class="download">
                    <div class="topBox">
                        <div class="decorateBar fl"></div>
                        <div class="title fl">下载<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
</div>
                        <select class="os form-control fr" name="os">
                            <option>Windows</option>
                            <option>Max OS</option>
                            <option>Linux</option>
                        </select>
                    </div>
                    <div class="mainBox">
                        <img src="templates/CoursesSearch/img/phpSoftIcon.png" class="fl">
                        <table class="fl">
                            <thead>
                            <td>版本</td>
                            <td>大小</td>
                            </thead>
                            <tr>
                                <td>版本号</td>
                                <td>硬盘大小</td>
                            </tr>
                        </table>
                        <div class="softwareInfo fl">
                            default
                        </div>
                        <div class="cl"></div>
                    </div>
                    <div class="footBox">
                        <button class="button button-primary button-rounded button-small">去下载</button>
                    </div>
                </div>
                <?php echo '<script'; ?>
>
                    setInterval(function(){
                        var infoLeft=$(".download .softwareInfo").offset().left;
                        var boxLeft=$(".download").offset().left;
                        $(".download .footBox").css({
                            'margin-left':infoLeft-boxLeft
                        })
                    },100)
                <?php echo '</script'; ?>
>



                <?php
$_from = $_smarty_tpl->tpl_vars['baidu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['thisbaidu'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['thisbaidu']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['thisbaidu']->value) {
$_smarty_tpl->tpl_vars['thisbaidu']->_loop = true;
$foreach_thisbaidu_Sav = $_smarty_tpl->tpl_vars['thisbaidu'];
?>
                <div class="course">
                    <div class="topBox">
                        <div class="decorateBar fl"></div>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['thisbaidu']->value['url'];?>
"  >
                            <span class="title fl" style="font-size: 18px!important;">&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['thisbaidu']->value['title'];?>
</span>
                        </a>
                        <span class="score fl"></span>
                        <span class="score fr"><?php echo $_smarty_tpl->tpl_vars['thisbaidu']->value['number'];?>
&nbsp;&nbsp;</span>
                        <div class="cl"></div>
                    </div>
                    <div class="mainBox">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['thisbaidu']->value['img'];?>
" class="courseImg fl">
                        <div class="courseInfo fl">
                            <?php echo $_smarty_tpl->tpl_vars['thisbaidu']->value['content'];?>

                        </div>
                        <div class="footBox fl">
                            <span class="platform"><?php echo $_smarty_tpl->tpl_vars['thisbaidu']->value['from'];?>
</span>
                            <div class="cl"></div>
                            <button class="addBtn button button-primary button-rounded button-square button-small"><span>+</span></button>
                            <button class="relateBtn button button-rounded button-small">相关</button>
                        </div>
                        <div class="cl"></div>
                    </div>
                </div>
                <?php
$_smarty_tpl->tpl_vars['thisbaidu'] = $foreach_thisbaidu_Sav;
}
?>



            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <div class="relateResult">
                    <div class="topBox">
                        <div class="decorateBar fl"></div>
                        <span class="title fl">更多相关结果</span>
                        <div class="cl"></div>
                    </div>
                    <div class="mainBox">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="templates/CoursesSearch/img/phpImg.png">
                                    <span class="courseName">Title</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="templates/CoursesSearch/img/phpImg.png">
                                    <span class="courseName">Title</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="templates/CoursesSearch/img/phpImg.png">
                                    <span class="courseName">Title</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="templates/CoursesSearch/img/phpImg.png">
                                    <span class="courseName">Title</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="templates/CoursesSearch/img/phpImg.png">
                                    <span class="courseName">Title</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html><?php }
}
?>