<!DOCTYPE html>
<head>
    <title>temp</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <script type="text/javascript">
        function ShowElement(element)
        {
            var oldhtml = element.innerHTML;
            var id=element.id;
            var newobj = document.createElement('input');
            newobj.value=element.innerHTML;
            newobj.type = 'text';
            newobj.onblur = function(){
                element.innerHTML = this.value ? this.value : oldhtml;
                if(this.value!=''){
                    $.post("check.php?choice="+id,this.value);
                }
            };
            element.innerHTML = '';
            element.appendChild(newobj);
            newobj.focus();
        }
    </script>
</head>
<body>
<dl>
    <dt>你的用户名:</dt>
    <dd ondblclick="ShowElement(this)">11111</dd>
    <dt>你的个性档</dt>
    <dd ondblclick="ShowElement(this)">22222</dd>
</dl>
</body>
</html>