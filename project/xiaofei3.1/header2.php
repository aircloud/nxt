<?php  session_start(); ?>

<div class="button-group" style="width:100%; padding-bottom: 0;margin-bottom: 0;display: block; ">
    <a href="fenxiang.php" type="button" class="index-function  button button-highlight">学霸资料分享</a>
    <button type="button" class="index-function no-function button button-caution">通识开卷考</button>
    <a href="xingce.php" type="button" class="index-function  button button-royal">形势与政策</a>
    <button type="button" class="index-function no-function button button-action">历年考试题</button>
</div>

<div class="header-bigtop">
    <div class="header-bigpic">
        <div class="index_bigtran">
            <a href="index.php"><img src="images/pic.png" style="width: 80%" id="first"></a>
            <a href="index.php"><img src="images/logow.png" style="width: 80%" id="second"></a>
            <br/><br/>
        </div>
    </div>
</div>

<div style="float: right;margin: 10px;">
    <span style="padding: 10px;font-size: 16px;font-weight: 500;"><?php  if(isset($_SESSION['name'])) echo "<a href=\"personal.php\">".$_SESSION['name']."</a>"; ?></span>
    <a><span style="padding: 10px;font-weight: 500;font-size: 16px;"><?php  if(isset($_SESSION['name'])) echo"<a href='exit.php'>退出</a>"; ?></span></a>
    <a HREF="money.php"><span style="padding: 10px;font-weight: 500;font-size: 16px;">付款页</span></a>
</div><br/><br/>

