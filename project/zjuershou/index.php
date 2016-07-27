<?php
/**
 * Created by PhpStorm.
 * User: onlythen
 * Date: 8/1/15
 * Time: 7:18 PM
 */
session_start();

require_once("config.php");
@header("Content-type: text/html; charset=utf8");


$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
ini_set('date.timezone','Asia/Shanghai');


?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta name="viewport" content="width=divice-width,initial-scale=0.85,user-scalable=no,maximum-scale=0.85">

    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/jquery.mobile-1.4.5.min.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/underscore-min.js"></script>
    <style>
        body{
            background-image: url(images/repeaty.jpg) !important;
            background-repeat: repeat-y ;
        }
        #bookhead{
            background-color: rgba(255,69,0,0);
            height: auto;
        }

        a{
            text-decoration: none !important;
        }

        /*body{*/
        /*background-color: #dddddd !important;*/
        /*}*/
        #search{
            width: 60%;
            border-radius: 0;
            background-color: white;
            float: left;
            min-height: 45px;
            border: none;
        }
        .alpha{filter:alpha(opacity=30);}
        #searchbutton{
            float: left;
            background-color: #00ccff;
            width: 40%;
            text-align: center;
            font-size: 24px;
            min-height: 45px;
            border: none;
            color: white;
        }
    </style>
</head>
<body>

<div data-role="page" style=" background-image: url(images/repeaty.jpg) !important;
            background-repeat: repeat; background-attachment: fixed ;background-size:800px;">
    <!--<div data-role="header" data-position="fixed" id="bookhead">-->
    <!--&lt;!&ndash;<H1>浙大二手书</H1>&ndash;&gt;-->
    <!---->
    <!--</div>-->
    <div role="main">
        <form method="post" action="index.php" data-ajax="false" id="indexform" style="position: fixed;width: 100%;top:0px;">
            <input type="text" id="search" data-role="none" name="searching"  value="<?php if(isset($_POST['searching']))echo $_POST['searching']; ?>">
            <input type="submit" id="searchbutton" style="border-radius: 0;" value="图书搜索">
        </form>
        <br/>
        <br/>
        <div class="container" id="panel-ajax">
            <div style="text-align: center;color:darkblue;margin-top:10px;margin-bottom: 10px; ">
                <a href="upload.php" data-role="none" data-ajax="false" style="float: right;position: fixed;right: 10px;color:purple">我要上传图书</a>
                <p style="color: grey"> 最新上传</p>
            </div>
            <?PHP
            
            //            $str="select * from booklist where bookname like \"%$keyword%\" order by bookid desc";

            if(isset($_POST['searching'])){
                $search=$_POST['searching'];
                $str1="select * from booklist where bookname like \"%$search%\" ORDER BY tag ASC , time DESC limit 0,2";

            }
            else {
                $str1 = "select * from booklist ORDER BY  tag ASC , time DESC limit 0,5";
            }
            mysql_query("SET NAMES 'utf8';");
            $result=mysql_query($str1);
            $number=mysql_num_rows($result);
            if($number==0){
                echo "<div style=\"text-align:center>\"><p>呜呜本搜索没有在网站内发现你要找的书=.=!</p></div>";
            }
            for($i=0;$i<$number;$i++) {
                $temp=mysql_fetch_array($result);

                ?>


                <div class="panel" style="overflow:hidden;clear:both;margin: 10px;padding: 2px;">

                    <div style="width: 39%;float: left;min-height: 200px;">
                        <img src="<?php echo $temp['picture']; ?>" style="width: 80%;margin: 10px 10%;">
                    </div>
                    <div style=";width: 60%;float: left;min-height: 200px;">
                        <h4 style="border-bottom: 1px solid #b0b0b0;padding-bottom: 4px;"><B><?php  echo $temp['bookname']; ?></B>&nbsp;&nbsp;<b><?php  echo $temp['price']; ?></b>
                        </h4>

                        <p><?php  echo $temp['edition']; ?></p>

                        <P><?php  echo $temp['introduct']; ?></P>

                        <P style="color:#0000ff">联系方式：<?php  echo $temp['phone']; ?></P>

                        <P>所在地址：<?php  echo $temp['address']; ?></P>
                        <SPAN style="color:darkblue"><?php  echo $temp['ifsong']; ?></SPAN>
                        <?php if($temp['tag']==1)echo '<a>'; else echo "<a href='info.php?id=".$temp['id']." ' data-ajax=\"false\"  >"; ?><button class="btn-danger btn" STYLE="padding: 0.7em 0em;background-color: <?PHP if($temp['tag']==0)echo 'lightblue';else echo 'lightgrey'; ?>">
                            <?php if($temp['tag']==0)echo '我要购买'; else echo '已被购买';  ?>
                        </button><?php echo "</a>"; ?>
                    </div>
                </div>


                <?php
            }
            ?>
            <!--            <div class="panel" style="height: 250PX;overflow:scroll ;margin: 10px;">-->
            <!--                <div style="width: 39%;float: left;min-height: 200px">-->
            <!--                    <img src="images/1.pic.jpg" style="width: 80%;margin: 10px 10%;">-->
            <!--                </div>-->
            <!--                <div  style=";width: 60%;float: left;min-height: 200px;">-->
            <!--                    <h4 style="border-bottom: 1px solid #b0b0b0;padding-bottom: 4px;"><B>悲伤逆流成河</B></h4>-->
            <!--                    <p>2013年第二版</p>-->
            <!--                    <P>图书基本是新的，就是本来打算给前女友的，结果没有要.</P>-->
            <!--                    <P style="color:#0000ff">联系方式：18868103563</P>-->
            <!--                    <P >所在地址：玉泉</P>-->
            <!--                    <SPAN style="color:darkblue">紫金港、玉泉免费配送</SPAN>-->
            <!--                </div>-->
            <!--            </div>-->


        </div>
        <button id="onload">点我看看还有什么书</button>
    </div>
    <div data-role="footer" data-position="fixed" id="bookfoot">
        <h1>版权所有:优澄文化 浙ICP备15000598</h1>
    </div>
</div>


<div id="try"></div>
<script id="t2" type="text/template">
    <%_.each(datas, function(item) {%>

    <div class="panel" style="overflow:hidden;clear:both;margin: 10px;padding: 2px;">
        <div style="width: 39%;float: left;min-height: 200px;">
            <img src="<%=item.picture%>" style="width: 80%;margin: 10px 10%;">
        </div>
        <div style=";width: 60%;float: left;min-height: 200px;">
            <h4 style="border-bottom: 1px solid #b0b0b0;padding-bottom: 4px;"><B><%=item.bookname%></B>&nbsp;&nbsp;<b><%=item.price%></b>
            </h4>

            <p><%=item.edition%></p>

            <P><%=item.introduct%></P>

            <P style="color:#0000ff">联系方式：<%=item.phone%></P>

            <P>所在地址：<%=item.address%></P>
            <SPAN style="color:darkblue"><%=item.ifsong%></SPAN>

            <%if(item.tag==1) {%>
            <A data-ajax="false"><button class="btn-danger btn" STYLE="padding: 0.7em 0em;background-color:lightgrey" >已被购买</button></A>
            <%} else{%>
            <A data-ajax="false" href="info.php?id=<%=item.id%>"><button class="btn-danger btn" STYLE="padding: 0.7em 0em;background-color:lightblue" >我要购买</button></A>
            <%}%>
        </div>
    </div>
    <%});%>
</script>


<script>
    $(document).ready(function(){
            var limit=5;
            var offset=0;
            var i;
            var last=0
            $("#onload").click(function(){
                offset=offset+limit;
                var url= "con.php?begin="+offset+"&search="+"<?php  if(isset($_POST['searching']))echo $_POST['searching'];else echo "";  ?>";
                $.get(url,function(datas){
                    console.log(datas);
                    if(datas.length==0){
                        if(last==0){
                            var app2=document.createElement("div");
                            app2.innerHTML="<div style=\"text-align:center\"><p>"+"一共就这么多书啦"+"</p></div>";
                            var father2 = document.getElementById("panel-ajax");
                            father2.appendChild(app2);
                        }
                        last=1;
                    }
                    for(i=0;i<datas.length;i++){
                        var app=document.createElement("div");
                        var item=datas[i];
                        if(item.tag==0){
                            app.innerHTML="<div class=\"panel\" style=\"overflow:hidden;clear:both;margin: 10px;padding: 2px;\"><div style=\"width: 39%;float: left;min-height: 200px;\"><img src=\""+item.picture+
                                "\" style=\"width: 80%;margin: 10px 10%;\"><\/div><div style=\";width: 60%;float: left;min-height: 200px;\"><h4 style=\"border-bottom: 1px solid #b0b0b0;padding-bottom: 4px;\"><B>"+item.bookname+
                                "<\/B>&nbsp;&nbsp;<b>"+item.price+
                                "<\/b><\/h4><p>"+item.edition+
                                "<\/p><p>"+item.introduct+
                                "<\/p> <P style=\"color:#0000ff\">联系方式："+item.phone+
                                "<P>所在地址："+item.address+
                                "<\/P> <SPAN style=\"color:darkblue\">"+item.ifsong+
                                "<\/SPAN><A data-ajax=\"false\" href=\"info.php?id="+item.id+
                                "\"><button class=\"btn-danger btn ui-btn ui-shadow ui-corner-all\" STYLE=\"padding: 0.7em 0em;background-color:lightblue\" >我要购买<\/button></A>"+
                                "<\/div><\/div>";

                        }
                        else{
                            app.innerHTML="<div class=\"panel\" style=\"overflow:hidden;clear:both;margin: 10px;padding: 2px;\"><div style=\"width: 39%;float: left;min-height: 200px;\"><img src=\""+item.picture+
                                "\" style=\"width: 80%;margin: 10px 10%;\"><\/div><div style=\";width: 60%;float: left;min-height: 200px;\"><h4 style=\"border-bottom: 1px solid #b0b0b0;padding-bottom: 4px;\"><B>"+item.bookname+
                                "<\/B>&nbsp;&nbsp;<b>"+item.price+
                                "<\/b><\/h4><p>"+item.edition+
                                "<\/p><p>"+item.introduct+
                                "<\/p> <P style=\"color:#0000ff\">联系方式："+item.phone+
                                "<P>所在地址："+item.address+
                                "<\/P> <SPAN style=\"color:darkblue\">"+item.ifsong+
                                "<\/SPAN><A data-ajax=\"false\"><button class=\"btn-danger btn ui-btn ui-shadow ui-corner-all\" STYLE=\"padding: 0.7em 0em;background-color:lightgrey\" >已被购买<\/button><\/A><\/div><\/div>";


                        }
//                        $("#try").html( _.template($("#t2").html(), item));
                        var father = document.getElementById("panel-ajax");
                        father.appendChild(app);
                    }
                },'json');
            });
        }
    );
</script>
<script>
    window.onscroll=function(){
        var scrolltop = document.documentElement.scrollTop||document.body.scrollTop;//上滑了的距离，为了体现兼容加一点东西
        console.log(scrolltop);
//        if(scrolltop>20) {
//            var father = document.getElementById("indexform");
//            father.style.position = "fixed";
//            father.style.top = 0;
//        }
//        else{
//            var father2 = document.getElementById("indexform");
//            father2.style.position= "relative";
//        }
    }
</script>


</body>
</html>