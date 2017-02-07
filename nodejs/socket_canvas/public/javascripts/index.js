var socket = io.connect('115.29.102.81:8090');
socket.on('open',function(){
        console.log('connected');
        socket.send('success');
   });

//get canvas
var canvas = document.getElementById("canvas");

//full screen
canvas.width=window.innerWidth;
canvas.height=window.innerHeight;
//是否支持触摸
var touchable = 'createTouch' in document;
if (touchable) {
    canvas.addEventListener('touchstart', onTouchStart, false);
    canvas.addEventListener('touchmove', onTouchMove, false);
}
else
{
    // alert("touchable is false !");
}
//上一次触摸坐标
var lastX;
var lastY;
var ctx =canvas.getContext("2d"); //返回一个2d画图API
ctx.lineWidth=10;//画笔粗细
ctx.strokeStyle="#FF0000";//画笔颜色</p> <p>//触摸开始事件
function onTouchStart(event) {
    event.preventDefault();
    lastX=event.touches[0].clientX;
    lastY=event.touches[0].clientY;
    drawRound(lastX,lastY);
}
//触摸滑动事件
function onTouchMove(event) {
    try {
        event.preventDefault();
        drawLine(lastX, lastY, event.touches[0].clientX, event.touches[0].clientY);
        //这里应该传送画圆的数据
        lastX = event.touches[0].clientX;
        lastY = event.touches[0].clientY;
    }
    catch (err) {
        alert(err.description);
    }//画圆
}

function drawRound(x,y)
{
    ctx.fillStyle="#FF0000";
    ctx.beginPath();
    ctx.arc(x,y,5,0,Math.PI*2,true);//context.arc(x,y,r,sAngle,eAngle,counterclockwise);两个坐标、半径、两个角度、顺逆时针
    ctx.closePath();
    ctx.fill();//使用 fill() 方法来填充图像（默认是黑色）
    socket.emit('drawRoundbegin',x+","+y);
}
//画线
function drawLine(startX,startY,endX,endY)
{
    ctx.beginPath();
    ctx.lineCap="round";  //要把画线的方式改成这个圆形否则不好做
    ctx.moveTo(startX,startY);
    ctx.lineTo(endX,endY);
    ctx.stroke();//stroke() 方法会实际地绘制出通过 moveTo() 和 lineTo() 方法定义的路径。默认颜色是黑色
    socket.emit('drawLinebegin',startX+","+startY+","+endX+","+endY);
}

function clearcarvas(){
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    socket.emit('clearcarvas');
}


//以下是被动部分的代码

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

function aconTouchStart(event) {
    event.preventDefault();
    lastX=event.touches[0].clientX;
    lastY=event.touches[0].clientY;
    drawRound(lastX,lastY);
}
function aconTouchMove(event){
      try {
        event.preventDefault();
        drawLine(lastX, lastY, event.touches[0].clientX, event.touches[0].clientY);
        //这里应该传送画圆的数据
        lastX = event.touches[0].clientX;
        lastY = event.touches[0].clientY;
    }
    catch (err) {
        alert(err.description);
    }//画圆
}

function acdrawRound(x,y)
{
    ctx.fillStyle="#FF0000";
    ctx.beginPath();
    ctx.arc(x,y,5,0,Math.PI*2,true);//context.arc(x,y,r,sAngle,eAngle,counterclockwise);两个坐标、半径、两个角度、顺逆时针
    ctx.closePath();
    ctx.fill();//使用 fill() 方法来填充图像（默认是黑色）
}
//画线
function acdrawLine(startX,startY,endX,endY)
{
    ctx.beginPath();
    ctx.lineCap="round";  //要把画线的方式改成这个圆形否则不好做
    ctx.moveTo(startX,startY);
    ctx.lineTo(endX,endY);
    ctx.stroke();//stroke() 方法会实际地绘制出通过 moveTo() 和 lineTo() 方法定义的路径。默认颜色是黑色
}

function acclearcarvas(){
    ctx.clearRect(0, 0, canvas.width, canvas.height);
}

// $().ready(function(){
//    var clear = 

// });


















