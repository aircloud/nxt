$(function(){
var socket = io.connect('115.29.102.81:8090');
    socket.on('open',function(){
                    console.log('connected');
                    socket.send('success');
     });

var view1 = Backbone.View.extend({
        el:'#canvas',
        events:{
            'click':'onclickStart',

            'touchstart':'onTouchStart',
            'touchmove':'onTouchMove'
        },

        initialize:function(options){
            

            //get canvas
            //var canvas = $('#canvas');

            //full screen
            // console.log(this.$el);
            // console.log(window.innerWidth);
            this.$el.css('width',window.innerWidth);
            this.$el.css('height',window.innerHeight);
            // console.log(this.$el.width,this.$el.height);
            // console.log(window.innerWidth);
            //是否支持触摸
            // var touchable = 'createTouch' in document;
            // if (touchable) {
            // this.$el.bind('touchstart', onTouchStart, false);
            // this.$el.bind('touchmove', onTouchMove, false);
            // }
            // var this.lastX;
            // var this.lastY;
            this.ctx =(this.$el)[0].getContext("2d"); //返回一个2d画图API
            this.ctx.lineWidth=10;//画笔粗细
            this.ctx.strokeStyle="#FF0000";//画笔颜色</p> <p>//触摸开始事件


            // this.$el.on('touchstart',onTouchStart,false);
            // this.$el.on('touchmove',onTouchMove,false);

            socket.on('clearcarvas',function(){
                acclearcarvas();
            });

            socket.on('drawRound',function(result){
                console.log(result);
                strs=result.split(",");
                acdrawRound(strs[0],strs[1]);
            });

            socket.on('drawLine',function(result){
                console.log(result);
                strs=result.split(",");
                acdrawLine(strs[0],strs[1],strs[2],strs[3]);
            });

        },

        onclickStart:function(event){
            console.log(event);
            event.preventDefault();
            this.lastX=event.clientX;
            this.lastY=event.clientY;
            this.drawRound(this.lastX,this.lastY);
        },

        onTouchStart: function(event) {
            console.log(event);
            event.preventDefault();
            lastX=event.touches[0].clientX;
            lastY=event.touches[0].clientY;
            this.drawRound(lastX,lastY);
        },
        //触摸滑动事件
        onTouchMove: function(event) {

            try {
                event[0].preventDefault();
                drawLine(lastX, lastY, event[0].touches[0].clientX, event[0].touches[0].clientY);
                //这里应该传送画圆的数据
                lastX = event[0].touches[0].clientX;
                lastY = event[0].touches[0].clientY;
            }
            catch (err) {
                alert(err.description);
            }//画圆
        },

         drawRound: function(x,y)
        {
            ctx.fillStyle="#FF0000";
            ctx.beginPath();
            ctx.arc(x,y,5,0,Math.PI*2,true);//context.arc(x,y,r,sAngle,eAngle,counterclockwise);两个坐标、半径、两个角度、顺逆时针
            ctx.closePath();
            ctx.fill();//使用 fill() 方法来填充图像（默认是黑色）
            socket.emit('drawRoundbegin',x+","+y);
        },
        //画线
        drawLine :function (startX,startY,endX,endY)
        {
            ctx.beginPath();
            ctx.lineCap="round";  //要把画线的方式改成这个圆形否则不好做
            ctx.moveTo(startX,startY);
            ctx.lineTo(endX,endY);
            ctx.stroke();//stroke() 方法会实际地绘制出通过 moveTo() 和 lineTo() 方法定义的路径。默认颜色是黑色
            socket.emit('drawLinebegin',startX+","+startY+","+endX+","+endY);
        },

        clearcarvas:function (){
            alert(1);
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            socket.emit('clearcarvas');
        },

        acdrawRound :function (x,y)
        {
            ctx.fillStyle="#FF0000";
            ctx.beginPath();
            ctx.arc(x,y,5,0,Math.PI*2,true);//context.arc(x,y,r,sAngle,eAngle,counterclockwise);两个坐标、半径、两个角度、顺逆时针
            ctx.closePath();
            ctx.fill();//使用 fill() 方法来填充图像（默认是黑色）
        },
        //画线
        acdrawLine: function (startX,startY,endX,endY)
        {
            ctx.beginPath();
            ctx.lineCap="round";  //要把画线的方式改成这个圆形否则不好做
            ctx.moveTo(startX,startY);
            ctx.lineTo(endX,endY);
            ctx.stroke();//stroke() 方法会实际地绘制出通过 moveTo() 和 lineTo() 方法定义的路径。默认颜色是黑色
        },

        acclearcarvas: function (){
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        }
});    

var spid = new view1();
$('#clearcarvas').bind('click',function(){
    spid.clearcarvas();
})

});











