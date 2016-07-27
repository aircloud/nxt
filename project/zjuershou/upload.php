


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
        <meta name="viewport" content="width=divice-width,initial-scale=1.0">

    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/jquery.mobile-1.4.5.min.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>

<div data-role="header" data-position="fixed"  style="text-align: center;background-color: lightblue">
    <h1><b style="color: darkblue;font-size:18px;">上传图书信息</b></h1>
</div>

<form action="uploadafter.php" method="post" enctype="multipart/form-data" id="print-form" data-ajax="false">


    <div data-role="fieldcontain"data-type="horizontal">
        <div style="text-align: center;color:darkblue">请上传图书照片</div>
        <input type="file" name="file" id="file" value="" placeholder="图片"  />
    </div>

    <div data-role="fieldcontain"data-type="horizontal">
        <input type="text" name="bookname" id="bookname" value="" placeholder="书名" />
    </div>
    <div data-role="fieldcontain"data-type="horizontal">
        <input type="text" name="edition" id="edition" value="" placeholder="出版年份以及作者"  />
    </div>

    <div data-role="fieldcontain"data-type="horizontal">
        <input type="text" name="address" id="address" value="" placeholder="所在地址"  />
    </div>

    <div data-role="fieldcontain"data-type="horizontal">
        <input type="text" name="explain" id="explain" value="" placeholder="详细说明"  />
    </div>


    <div data-role="fieldcontain"data-type="horizontal">
        <input type="text" name="price" id="price" value="" placeholder="价格"  />
    </div>

    <div data-role="fieldcontain"data-type="horizontal">
        <input type="text" name="phone" id="phone" value="" placeholder="联系方式"  />
    </div>

    <div data-role="fieldcontain"data-type="horizontal">
        <input type="text" name="ifsong" id="ifsong" value="" placeholder="配送或自取"  />
    </div>
    <button type="submit" id="subprint" class="ui-btn ui-shadow" style="background-color: lightblue">提交</button>

</form>
<div data-role="footer" data-position="fixed" id="bookfoot">
    <h1>版权所有:优澄文化 浙ICP备15000598</h1>
</div>

<script>
    $("#subprint").validate({
        submitHandler:function(form){
            form.submit();
        }
    });

    $("#print-form").validate({
        rules: {
            phone: {
                required:true,
                minlength:6
            },
            address: {
                required: true,
                minlength: 3
            },
            file:{
                required:true
            },
            bookname: {
                required:true
            },
            edition:{
                required:true
            },
            ifsong:{
                required:true
            }

        },
        messages: {
            phone: {
                required:"电话必填",
                minlength:"请填入符合规范的电话"
            },
            address: {
                required: "请输入地址",
                minlength: "请填入符合规范的地址"
            },
            file: {
                required:"请上传文件"
            },
            bookname: {
                required:"书名必填"
            },
            edition:{
                required:"版本必填"
            },
            ifsong:{
                required:"配送方式必填"
            }

        }
    });
</script>

</body>
</html>