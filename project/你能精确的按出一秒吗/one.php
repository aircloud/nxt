
<!DOCTYPE html>
<!-- saved from url=(0067)http://www.stkeyi.cn/mei/yimiao/?from=groupmessage&isappinstalled=0 -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>你能精准地按出一秒吗？</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <style type="text/css">
        * {margin:0; padding: 0;}
        html,body {width: 100%;height: 100%;overflow: hidden;background-color:#91C1AF; }
        /*body {background:url(http://t1.qpic.cn/mblogpic/227d0142d8ee196e1140/2000) repeat; }*/

        #box {width:100%;height:100%;background:url(http://t1.qpic.cn/mblogpic/227d0142d8ee196e1140/2000) repeat;overflow: hidden;text-align: center;}
        #top {width: 200px ;height: 110px; background:url(http://t1.qpic.cn/mblogpic/f0a794dda41b96115500/2000);background-size: 100% 100%; margin: 10% auto 0}
        #box h1 {font-size: 16px;font-weight: normal;padding: 10px;color: #666;}
        #content {width: 280px;background: #fff;border-radius: 20px;margin: 0 auto;line-height: 24px;padding: 5px 3px;color: #666;font-size: 18px;}
        #content h2 {font-size: 24px;display: inline;color: #f5484b;}
        #btn_bg {width: 110px;height: 110px;border-radius: 55px;background:#eee; margin: 10px auto;position: relative;border:1px solid #f0d0d0;}
        #btn_bt {width: 90px;height: 90px; border-radius: 45px;background: #E4A96A;line-height: 90px;position: absolute;top: 10px;left: 10px;border: 0;}
        #btn_bt span {color: #fff;font-size: 24px;}
        .active {-webkit-box-shadow:1px 1px 6px 2px rgba(0,0,0,0.4)  inset ;-ms-box-shadow:1px 1px 6px 2px rgba(0,0,0,0.4)  inset ; box-shadow: 1px 1px 6px 2px rgba(0,0,0,0.4) inset ; }
        #box a {border-radius: 5px;background-color: rgb(228, 169, 106);display: block;width:120px;height:20px;padding: 5px;text-decoration: none;font-size: 16px;color: #fff;margin: 0 auto;margin-top: 10px;}
        #share {width: 100%;height: 100%;background: rgba(0,0,0,0.9) url(http://t1.qpic.cn/mblogpic/778e197134145bd8c758/2000) no-repeat;background-position: top right; position: absolute;top:0;right: 0;z-index: 99;display: none;}
        #logo {width: 80px;height: 80px;background:url(http://t1.qpic.cn/mblogpic/1b60299d2dd78769c1f2/2000);background-size: 100% 100%; margin: 10px auto;}
        .footer{position: fixed;bottom: 0;width: 100%;display: block;}
        .footer img{display:block;}
    </style>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
</head><body>
<div id="wx_pic" style="margin:0 auto;display:none;">
</div>

<div style="text-align: center;background:#91C1AF">
    <div id="" style="width: 100%; text-align: center; display: block; background:#91C1AF; margin: 0 auto;">

        <div id="box" style="width: 100%; height: 100%; background:#91C1AF;text-align: center;overflow: scroll">
            <div id="top"></div>
            <h1>你能精确地按出一秒吗？</h1>
            <p id="content"></p>
            <div id="btn_bg">
                <div id="btn_bt">
                    <span style="display: block">按住</span>
                </div>
            </div>
            <a style="margin-top:20px" id="share_a" href="http://www.stkeyi.cn/mei/yimiao/?from=groupmessage&isappinstalled=0#">炫耀一下</a>
            <!-- <a  href="http">拿红包100%有</a> -->
            <!-- <a  href="http">好声音内幕</a> -->
            <a href="http://mp.weixin.qq.com/s?__biz=MzI0MDA0NjYzNw==&mid=208088204&idx=1&sn=ad6943ffc113e8905600eb3919ecf1f4#rd">更多好玩</a>

            <a href="http://mp.weixin.qq.com/s?__biz=MzI0MDA0NjYzNw==&mid=208087912&idx=1&sn=e3e2659d8b81156b88c9aea05c0d158b#rd">zjumaker</a>

            <!-- <div id=logo></div> -->
            <div id="share"></div>

        </div>
    </div>
</div>


<script>
    window.onload = function(){

        /*初始化*/
        var wWidth = document.documentElement.clientWidth;
        var wHeight = document.documentElement.clientHeight;
        var oBox = document.getElementById("box");
        oBox.style.width = wWidth + 'px';
        oBox.style.height = wHeight + 'px';


        var oBtn = document.getElementById("btn_bt");
        var oP = document.getElementById("content");
        var timeStart = 0;
        var timeEnd = 0;


        function absorbEvent_(event) {
            var e = event || window.event;
            e.preventDefault && e.preventDefault();
            e.stopPropagation && e.stopPropagation();
            e.cancelBubble = true;
            e.returnValue = false;
            return false;
        }
        function preventLongPressMenu(node) {
            node.ontouchstart = absorbEvent_;
            node.ontouchmove = absorbEvent_;
            node.ontouchend = absorbEvent_;
            node.ontouchcancel = absorbEvent_;
        }
        preventLongPressMenu(oBtn);

        /*触摸事件*/
        oBtn.addEventListener("touchstart",function(){

            timeStart = (new Date()).valueOf();
            oBtn.className = "active";

        },false);

        oBtn.addEventListener("touchend",function(){
            timeEnd = (new Date()).valueOf();
            time = (timeEnd - timeStart)/1000;
            oBtn.className = "";
            var text = '';
            var text2 = '';
            var title = '';

            if(time >0 && time <= 0.6) {
                text = '<h2>'+time+'</h2>&nbsp;秒<br/>这都想成为时间达人?要决战到天亮的节奏啊！';
                text2 = ''+time+'秒,你还差得远呢?';
                title = '我按出了'+time+'秒，按出一秒你就是时间达人！哈哈哈...';
            } else if(time > 0.6 && time <= 0.9) {
                text = '<h2>'+time+'</h2>&nbsp;秒<br/>与时间达人的差距只在呼吸间!';
                text2 = ''+time+'秒,差距只在呼吸间!';
                title = '我按出了'+time+'秒，按出一秒你就是时间达人哦！哈哈哈...';
            } else if(time >0.9 && time <= 1.0) {
                text = '<h2>'+time+'</h2>&nbsp;秒<br/>叼爆了! 你是开挂了吧！发朋友圈炫耀一下！';
                text2 = ''+time+'秒,叼爆了! 你是开挂了吧！';
                title = '我按出了'+time+'秒，按出一秒你就是时间达人哦！哈哈哈...';
            }else if(time > 1 && time <= 1.1) {
                text = '<h2>'+time+'</h2>&nbsp;秒<br/>人中极品，与时间达人擦毫秒而过。';
                text2 = '1.00秒,完美';
                title = '我按出了'+time+'秒，按出一秒你就是时间达人哦！哈哈哈...';
            } else {
                text = '<h2>'+time+'</h2>&nbsp;秒<br/>过了，过了。不服让朋友来战！';
                text2 = ''+time+'秒，你火星时间吧？！';
                title = '我按出了'+time+'秒，按出一秒你就是时间达人哦！哈哈哈...';
            }

            oP.innerHTML = text ;
            document.title = title;

        },false);

        var aShare = document.getElementById("share_a");
        var divShare = document.getElementById("share");
        aShare.addEventListener("touchstart",function(){
            divShare.style.display = "block";
            document.addEventListener("touchmove",function(){
                divShare.style.display = "none";
            },false)
        },false);

        divShare.addEventListener("touchstart",function(){
            this.style.display = "none";
        },false);



    }
</script>
</body></html>