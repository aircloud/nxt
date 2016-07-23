<?php /* Smarty version 3.1.27, created on 2015-11-21 18:48:34
         compiled from "D:\xampps\htdocs\learnbox\demo\templates\CoursesSearch\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:34425650bc828686e5_52792231%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66b2c0cfd78a737c4ec66eecdd8ed04abdd7fecc' => 
    array (
      0 => 'D:\\xampps\\htdocs\\learnbox\\demo\\templates\\CoursesSearch\\index.html',
      1 => 1448130002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34425650bc828686e5_52792231',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5650bc8289b531_96658091',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5650bc8289b531_96658091')) {
function content_5650bc8289b531_96658091 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '34425650bc828686e5_52792231';
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
                    <span class="title fl">java进阶</span>
                    <span class="score fr">9.9</span>
                    <div class="cl"></div>
                    <span class="university fl">harword</span>
                    <span class="searchNum fl">602次搜索</span>
                    <div class="cl"></div>
                </div>
                <div class="content">

                    <!--<div class="pageContent">-->

                    <!--</div>-->
                    <div class="pageItem">
                        <ul>
                            <li><a href="#">java进阶一</a></li>
                            <li><a href="#">java进阶一</a></li>
                            <li><a href="#">java进阶一</a></li>
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
                    <span class="title fl">ps水印制作</span>
                    <span class="score fr">9.7</span>
                    <div class="cl"></div>
                    <span class="university fl">浙江大学</span>
                    <span class="searchNum fl">520次搜索</span>
                    <div class="cl"></div>
                </div>
                <div class="content">
                    <div class="pageContent">
                        ps在线图片编辑器是一个专业的在线ps照片处理软件。绿色免安装,直接在您的浏览器上用它修正,调整和美化您的图像。

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
                    <span class="title fl">matlab教程</span>
                    <span class="score fr">9.2</span>
                    <div class="cl"></div>
                    <span class="university fl">百度传课</span>
                    <span class="searchNum fl">202 次搜索</span>
                    <div class="cl"></div>
                </div>
                <div class="content">
                    <div class="pageContent">
                        MATLAB是美国MathWorks公司出品的商业数学软件，用于算法开发、数据可视化、数据分析以及数值计算的高级技术计算语言和交互式环境，主要包括MATLAB和Simulink两大部分。
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
                        'background':'url("templates/CoursesSearch/img/recom3.png") no-repeat center'
                    });
                })
            <?php echo '</script'; ?>
>
        </div>
        <div class="col-md-3">
            <div class="course">
                <div class="topBox">
                    <div class="decorateBar fl"></div>
                    <span class="title fl">php基础</span>
                    <span class="score fr">9.0</span>
                    <div class="cl"></div>
                    <span class="university fl">极客学院</span>
                    <span class="searchNum fl">102次搜索</span>
                    <div class="cl"></div>
                </div>
                <div class="content">
                    <div class="pageContent">
                        极客学院原创PHP开发视频教程，在线学习PHP经典教程，通过全新的PHP基础+理论讲解，从基础的PHP开发环境搭建到PHP开发实战项目，提供系统的PHP视频教程+源码下载。
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
                        'background':'url("templates/CoursesSearch/img/recom4.png") no-repeat center'
                    });
                })
            <?php echo '</script'; ?>
>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    setInterval(function(){
        var courseRecomBox=$(".courseRecomBox");
        var fluid=$(".container-fluid");
        var courseBoxWidth=courseRecomBox.width();
        var clientWidth=fluid.width();
        var courseBoxLeft=(clientWidth-courseBoxWidth)/2;
        courseRecomBox.css({
            'left':courseBoxLeft
        })
    },300)
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>