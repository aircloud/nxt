<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/buttons.css" type="text/css" rel="stylesheet">
    <link href="css/index.css" type="text/css" rel="stylesheet">
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/messagecn.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.media.js"></script>
    <script src="js/jquery-labelauty.js"></script>
</head>
<body>

<li><input type="checkbox" class="lab-class" name="print" id="shuang"  value="双面打印" data-labelauty="双面打印"></li>

<br/><br/>
<div class="container">
    <div class="panel panel-info" title="医学类">
        <div class="panel-heading"><span class="orange bold bigger">医学类</span></div>
        <div class="panel-body">
            <div>
                <div class="block-title">
                    <span class="orange bold little-bigger" style="float: right">中医学</span>
                </div>
                <div class="block-content little-bigger">
                    <p class="darkblue hand"><a class="hand none-deco" data-toggle="modal" data-target="#about-modal" id="1001">中医学基础复习资料</a></p>
                    <p class="darkblue">
                        中医学基础复习资料2
                    </p>
                    <p class="darkblue">中医学基础复习资料3</p>
                </div><hr/>
            </div>
            <div>
                <div class="block-title">
                    <span class="orange bold little-bigger" style="float: right">医学免疫学(甲)</span>
                </div>
                <div class="block-content little-bigger">
                    <p class="darkblue">中医学基础复习资料</p>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-info" title="药学类">
        <div class="panel-heading"><span class="orange bold bigger">医学类</span></div>
        <div class="panel-body">
            <div>
                <div class="block-title">
                    <span class="orange bold little-bigger" style="float: right">中医学</span>
                </div>
                <div class="block-content little-bigger">
                    <p class="darkblue hand"><a class="hand none-deco" data-toggle="modal" data-target="#about-modal" id="1001">中医学基础复习资料</a></p>
                    <p class="darkblue">
                        中医学基础复习资料2
                    </p>
                    <p class="darkblue">中医学基础复习资料3</p>
                </div><hr/>
            </div>
            <div>
                <div class="block-title">
                    <span class="orange bold little-bigger" style="float: right">医学免疫学(甲)</span>
                </div>
                <div class="block-content little-bigger">
                    <p class="darkblue">中医学基础复习资料</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="about-modal" tabindex="-1" role="dialog" aria-labelledby="modal-label"
     aria-hidden="true">
    <div class="modal-dialog" style="width: 800px;">
        <div class="modal-content">
            <a class="media" href=""><span style="colr:red">单击四周关闭pdf预览</span></a>

        </div>
    </div>
</div>

<script type="text/javascript">

    $(function() {
        $('a.media').attr("href","js/guice.pdf").media({width:800, height:600});

    });
</script>
<script>
    $(function(){
        $('.lab-class').labelauty();
    });
</script>

</body>
</html>