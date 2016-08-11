由于ajax的同源限制，我们应当采用一些方法进行跨域请求，在这里我介绍这些方法：

1、iframe跨子域的ajax请求 

html代码：

 <iframe id="bfrm" style="display:none;" src="http://b.test.com/cross_sub_domain.html"></iframe>
    <button class="btn-sm btn btn-primary" onclick="crossSubDomain();">跨子域请求</button>


对应的提升domain:

  function crossSubDomain() {
        document.domain = 'test.com'; // 提升域
        window.frames['bfrm'].contentWindow.doAjax(function(data) {
            alert(data);
        });
  }

而在iframe对应的界面中，应当含有被调用的函数：

<script>
        document.domain = 'test.com';//注意在这里也要进行域的提升 只能提升一次。
        function doAjax(callback) {
            $.ajax('/test').done(function(data) {
                callback(data);
            });
        }

</script>

这种方法在自己的实际业务中比较实用。

还有jsonp的方案，原型：创建一个回调函数，然后在远程服务上调用这个函数并且将JSON 数据形式作为参数传递，完成回调。

在我们的界面写入如下的代码：

<script>
function callback(data) {
    console.log( data);
}
</script>
<script src="http://b.test.com/testjsonp"></script>

在另一个域的我们引用

(未完待续)


