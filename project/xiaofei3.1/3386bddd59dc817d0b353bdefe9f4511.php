<?php
session_start();
require_once("config.php");
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="container">
    <table border="3px" class="table table-striped  table-bordered table-hover" style="width: 98%;margin: auto">
        <tr style="width: 99%;text-align: center">
            <td style="width: 8%" class="table_td"><b>链接</b></td>
            <td style="width: 6%" class="table_td"><b>姓名</b></td>
            <td style="width: 4%" class="table_td"><b>下单时间</b></td>
            <td style="width: 10%" class="table_td"><b>备注</b></td>
            <td style="width: 10%" class="table_td"><b>电话</b></td>
            <td style="width: 10%" class="table_td"><b>地址</b></td>
            <td style="width: 8%" class="table_td"><b>颜色</b></td>
            <td style="width: 8%" class="table_td"><b>面数</b></td>
            <td style="width: 6%" class="table_td"><b>份数</b></td>
            <td style="width: 8%" class="table_td"><b>版数</b></td>
            <td style="width: 8%" class="table_td"><b>已完成</b></td>
            <td style="width: 8%" class="table_td"><b>最晚配送</b></td>
        </tr>
        <?php
        mysql_query("SET NAMES 'utf8';");
            $str6 = "select id,username,fileaddress,tip,deadline,phone,address,color,date,ifdouble,banshu,number from task WHERE success=0;";
        $result3=mysql_query($str6,$link_id);
        @$rows3=mysql_num_rows($result3);
        if($rows3>0) {
            while ($temp3 = mysql_fetch_array($result3)) { ?>
                <tr style="width: 99%;text-align: center">
                    <td style="width: 8%" class="table_td"><?php echo "<a href=\"".$temp3['fileaddress']."\">地址</a>"; ?></td>
                    <td style="width: 6%" class="table_td"><?php echo $temp3['username']; ?></td>
                    <td style="width: 4%" class="table_td"><?php echo $temp3['date']; ?></td>
                    <td style="width: 10%" class="table_td"><?php echo $temp3['tip']; ?></td>
                    <td style="width: 10%" class="table_td"><?php echo $temp3['phone']; ?></td>
                    <td style="width: 10%" class="table_td"><?php echo $temp3['address']; ?></td>
                    <td style="width: 8%" class="table_td"><?php echo $temp3['color']; ?></td>
                    <td style="width: 8%" class="table_td"><?php echo $temp3['ifdouble']; ?></td>
                    <td style="width: 6%" class="table_td"><?php echo $temp3['number']; ?></td>
                    <td style="width: 8%" class="table_td"><?php echo $temp3['banshu']; ?></td>
                    <td style="width: 8%" class="table_td"><?php echo "<a href=wancheng3386bddd59dc817d0b353bdefe9f4511.php?id=".$temp3['id'].">SUCCESS</a>"; ?></td>
                    <td style="width: 8%" class="table_td"><?php echo $temp3['deadline']; ?></td>

                </tr>

            <?php
            }
        }
        ?>
    </table>
</div>
</body>
</html>