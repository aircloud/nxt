<?php /* Smarty version 3.1.27, created on 2015-11-21 16:03:17
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/learnbox/demo/templates/CoursesSearch/index.html" */ ?>
<?php
/*%%SmartyHeaderCode:1347614129565087b50bc3a3_62065592%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bbbb891c754facddb7859d5776b5e76a6927f79' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/learnbox/demo/templates/CoursesSearch/index.html',
      1 => 1448118088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1347614129565087b50bc3a3_62065592',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565087b51098c5_72084269',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565087b51098c5_72084269')) {
function content_565087b51098c5_72084269 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1347614129565087b50bc3a3_62065592';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>学习盒子</title>
    <link rel="stylesheet" type="text/css" href="templates/CoursesSearch/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="templates/CoursesSearch/css/init.css">
    <link rel="stylesheet" type="text/css" href="templates/CoursesSearch/css/buttons.css">
    <link rel="stylesheet" type="text/css" href="templates/CoursesSearch/css/index.css">
    <?php echo '<script'; ?>
 src="templates/CoursesSearch/js/jquery-2.1.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="templates/CoursesSearch/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>
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
    <!--modal Box-->
    <?php echo '<script'; ?>
 src="templates/js/modalBox.js"><?php echo '</script'; ?>
>
    <!--LOGO BOX-->
    <div class="logoBox">
        <img class="logo" src="templates/CoursesSearch/img/logo@x2.png">
        <span class="proName">学习盒子</span>
    </div>
    <div class="searchBox container">
        <form method="post" action="main.php">
            <input type="search" class="search fl" name="search" placeholder="搜索 知识 / 软件 / 课程 ...">
            <button type="submit" class="button button-primary button-square fl"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        </form>
        <div class="cl"></div>
    </div>
    <div class="courseRecomBox row">
        <div class="col-md-3">
            <div class="course">
                <div class="topBox">
                    <div class="decorateBar fl"></div>
                    <span class="title fl">name</span>
                    <span class="score fl">score</span>
                    <div class="cl"></div>
                    <span class="university fl">university</span>
                    <span class="searchNum fl">num 次搜索</span>
                    <div class="cl"></div>
                </div>
                <div class="content">

                    <!--<div class="pageContent">-->

                    <!--</div>-->
                    <div class="pageItem">
                        <ul>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                        </ul>
                        <a href="#">查看全部...</a>
                    </div>
                </div>
            </div>
            <?php echo '<script'; ?>
>
                $(document).ready(function(){
                    var course=$(".course").eq(0);
                    course.css({
                        'background':'url("templates/CoursesSearch/img/recom2.png") no-repeat center'
                    });
                })
            <?php echo '</script'; ?>
>
        </div>
        <div class="col-md-3">
            <div class="course">
                <div class="topBox">
                    <div class="decorateBar fl"></div>
                    <span class="title fl">name</span>
                    <span class="score fl">score</span>
                    <div class="cl"></div>
                    <span class="university fl">university</span>
                    <span class="searchNum fl">num 次搜索</span>
                    <div class="cl"></div>
                </div>
                <div class="content">
                    <div class="pageContent">
                        课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容
                        课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容
                        课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容
                        课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容
                    </div>

                    <!--<div class="pageItem">-->
                    <!--<ul>-->

                    <!--</ul>-->
                    <!--<a href="#">查看全部...</a>-->
                    <!--</div>-->
                </div>
            </div>
            <?php echo '<script'; ?>
>
                $(document).ready(function(){
                    var course=$(".course").eq(1);
                    course.css({
                        'background':'url("templates/CoursesSearch/img/recom1.png") no-repeat center'
                    });
                })
            <?php echo '</script'; ?>
>
        </div>
        <div class="col-md-3">
            <div class="course">
                <div class="topBox">
                    <div class="decorateBar fl"></div>
                    <span class="title fl">name</span>
                    <span class="score fl">score</span>
                    <div class="cl"></div>
                    <span class="university fl">university</span>
                    <span class="searchNum fl">num 次搜索</span>
                    <div class="cl"></div>
                </div>
                <div class="content">
                    <div class="pageContent">
                        课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容
                        课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容
                        课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容
                        课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容
                    </div>
                    <!--<div class="pageItem">-->
                    <!--<ul>-->

                    <!--</ul>-->
                    <!--<a href="#">查看全部...</a>-->
                    <!--</div>-->
                </div>
            </div>
            <?php echo '<script'; ?>
>
                $(document).ready(function(){
                    var course=$(".course").eq(2);
                    course.css({
                        'background':'url("templates/CoursesSearch/img/recom1.png") no-repeat center'
                    });
                })
            <?php echo '</script'; ?>
>
        </div>
        <div class="col-md-3">
            <div class="course">
                <div class="topBox">
                    <div class="decorateBar fl"></div>
                    <span class="title fl">name</span>
                    <span class="score fl">score</span>
                    <div class="cl"></div>
                    <span class="university fl">university</span>
                    <span class="searchNum fl">num次搜索</span>
                    <div class="cl"></div>
                </div>
                <div class="content">
                    <div class="pageContent">
                        课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容
                        课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容
                        课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容
                        课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容课程内容
                    </div>
                    <!--<div class="pageItem">-->
                    <!--<ul>-->

                    <!--</ul>-->
                    <!--<a href="#">查看全部...</a>-->
                    <!--</div>-->
                </div>
            </div>
            <?php echo '<script'; ?>
>
                $(document).ready(function(){
                    var course=$(".course").eq(3);
                    course.css({
                        'background':'url("templates/CoursesSearch/img/recom1.png") no-repeat center'
                    });
                })
            <?php echo '</script'; ?>
>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    $(document).ready(function(){
        var clientHeight=document.documentElement.clientHeight;
        var courseBoxWidth=$(".courseRecomBox").width();
        var clientWidth=$(".container-fluid").width();
        var courseBoxLeft=(clientWidth-courseBoxWidth)/2;
        $(".container-fluid").css({
            'height':clientHeight
        })
        $(".courseRecomBox").css({
            'left':courseBoxLeft
        })
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>