<?php
session_start();
require_once("config.php");
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
$n=$_SESSION['name'];
?>


<!DOCTYPE html>
<html style="min-width: 100px;">
<head lang="en">
    <meta charset="UTF-8">
    <title>我的订单</title>
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/buttons.css" type="text/css" rel="stylesheet">
    <link href="css/index.css" type="text/css" rel="stylesheet">
    <link href="css/jquery-labelauty.css" type="text/css" rel="stylesheet">
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/messagecn.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-labelauty.js"></script>
</head>
<body style="min-width: 200px;">

<?php  include "header.php" ?>

<div class="container">
    <table border="3px" class="table table-striped  table-bordered table-hover" style="width: 98%;margin: auto">
        <tr style="width: 99%;text-align: center" class="info">
            <td style="width: 11%" class="table_td">下载地址</td>
            <td style="width: 11%" class="table_td"><b>电话</b></td>
            <td style="width: 11%" class="table_td"><b>地址</b></td>
            <td style="width: 11%" class="table_td"><b>颜色</b></td>
            <td style="width: 11%" class="table_td"><b>面数</b></td>
            <td style="width: 11%" class="table_td"><b>份数</b></td>
            <td style="width: 11%" class="table_td"><b>版数</b></td>
            <td style="width: 11%" class="table_td"><b>打印情况</b></td>
            <td style="width: 11%" class="table_td"><b>是否删除</b></td>
        </tr>
        <?php
        mysql_query("SET NAMES 'utf8';");
        $str6 = "select id,fileaddress,tip,deadline,phone,address,color,ifdouble,banshu,number,success from task WHERE username='$n';";
        $result3=mysql_query($str6,$link_id);
        @$rows3=mysql_num_rows($result3);
        if($rows3>0) {
            while ($temp3 = mysql_fetch_array($result3)) { ?>
                <tr style="width: 99%;text-align: center">
                    <td style="width: 11%" class="table_td"><?php echo "<a href=\"".$temp3['fileaddress']."\">地址</a>"; ?></td>
                    <td style="width: 11%" class="table_td"><?php echo $temp3['phone']; ?></td>
                    <td style="width: 11%" class="table_td"><?php echo $temp3['address']; ?></td>
                    <td style="width: 11%" class="table_td"><?php echo $temp3['color']; ?></td>
                    <td style="width: 11%" class="table_td"><?php echo $temp3['ifdouble']; ?></td>
                    <td style="width: 11%" class="table_td"><?php echo $temp3['number']; ?></td>
                    <td style="width: 11%" class="table_td"><?php echo $temp3['banshu']; ?></td>
                    <td style="width: 11%" class="table_td"><?php if($temp3['success']=="0")echo "未处理"; else echo"已处理"; ?></td>
                    <td style="width: 11%" class="table_td"><?php if($temp3['success']=="0")echo "<a href=\"personaldel.php?id=".$temp3["id"]."\">删除订单及文件</a>"; else echo "<a href=\"personaldel.php?id=".$temp3["id"]."\">删除文件</a>"; ?></td>
                </tr>

            <?php
            }
        }
        ?>
    </table>
</div>
<br/><br/>
<?php

include "footer.php";

?>

</body>
</html>