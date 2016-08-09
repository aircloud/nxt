/**
 * Created by hh on 5/8/2016.
 */


$(function(){

    function getLocalTime(nS) {     
       return new Date(parseInt(nS)).toLocaleString().replace(/年|月/g, "-").replace(/日/g, " ");      
    }     

    var thistime = Backbone.Model.extend({
          defaults:function(){
              return{
                  id:Date.parse(new Date()),
                  year:0,
                  month:0,
                  day:0,
                  total:0
              }
          },

          url:'/savetime',

          gettotal:function(){
              var thisyear = this.get('year');
              var thismonth = this.get('month');
              var thisday = this.get('day');
              console.log(thisyear,thismonth,thisday);
              //var date1 = Date.parse(new Date(thismonth+'-'+thisday+'-'+thisyear));
              var date1 = Date.parse(new Date(thisyear,thismonth-1,thisday));
              console.log(date1);
              console.log(getLocalTime(date1));
              // alert(date1+"11111");

              var date2 = Date.parse(new Date());
              console.log(getLocalTime(date2));
              // alert(date2+"11111");

              var totaltime =  parseInt(Math.abs(date2  -  date1)  /  1000  /  60  /  60  /24);
              // alert(totaltime+"天");
              this.set('total',totaltime);
              this.save({} ,
                  {
                      success : function(model, response){
                          // model.set("a", response.Id);
                          // alert(response.percent);
                          create_png(totaltime,response.percent);
                          document.title="我们已经在一起了"+totaltime+"天，超越了"+response.percent+"的情侣"; 
                      }
                  });
          }
    });


    //js重新布局

    var width=$(window).width();
    var margin1 = (width - 162)/2;
    // $("#pic1").css('margin-left',margin1+'px');

    var margin2 = (width - 287)/2;
    $("#pic2").css('margin-left',margin2+'px');

    var margin3 = (width - 133)/2;
    var my_submit = $("#submit");
    my_submit.css('margin-left',margin3+"px");

    var margin4 = (width - $("#span1").width())/2;
    $("#p1").css('margin-left',margin4+"px");

    var my_contain = $('#my_contain');
    var height = $(window).height();
    var margin_h = (height-my_contain.height())/2-height*0.08;
    my_contain.css('margin-top',margin_h+"px");

    var mycanvas = $("#canvas");
    var canvas_margin_left = (width- mycanvas.width())/2;
    mycanvas.css('left',canvas_margin_left+"px");
    $("#result_img").css('left',canvas_margin_left+"px");


    var timeform = $('#timeform');
    var form_margin = (width - 260)/2;
    timeform.css('margin-left',form_margin+"px");
    //布局结束

    $('.load-back').css('display','none');

    $('#span3').bind('click',function(){
        alert("数据基于原本调查数据，您填写的数据会经过服务器清洗后按权重影响数据库。所以随着测试用户的增多您的排名可能会变化哦～")
    });

    my_submit.bind('click',function(){
       my_submit.removeClass('perani').addClass('myanimation1');
       $('#span1').css('display','none');

       var mytime = new thistime();
       mytime.set({
           year:$('#year').val(),
           month:$('#month').val(),
           day:$('#day').val()
       });
       mytime.gettotal();console.log(mytime);
       // mytime.save();
       setTimeout(function(){
           $('#span2').css({display:'block',position:'relative',top:'140px'});
           $('#submit').css('display','none').remove();
       },900);
});

    function create_png(str1,str2){
        var canvas = $("#canvas");
        var ctx = canvas[0].getContext("2d");
        var img = $("#input_png");
        ctx.drawImage(img[0],0,0,503,624,0,0,670,832);
        ctx.font = 'bold 60px consolas';
        ctx.textAlign = 'left';
        ctx.textBaseline = 'top';
        ctx.fillStyle = '#34495e';
        var x1=470;
        var x2=285;
        var y1=145;
        var y2=286;
        if(str1>999)x1=455;
        else if(str1<100)x1=485;
        else if(str1<10)x2=500;

        ctx.fillText(str1, x1,y1);
        ctx.fillText(str2, x2,y2);

        $('#result_img').attr('src',canvas[0].toDataURL("image/png")).delay(1000).slideDown(1000);
        // $('#result_img').css('display','block');
        canvas.css('display',"none");
        // cans.font = 'bold 144px consolas';
        // cans.textAlign = 'left';
        // cans.textBaseline = 'top';
        // cans.strokeStyle = '#DF5326';
        // cans.strokeText('Hello', 100, 100);
        // cans.font = 'bold 144px arial';
        // cans.fillStyle = 'red';
        // cans.fillText('World', 300,300);
        //  CanvasText = new CanvasText;
        // CanvasText.config({
        //     canvas: canvas,
        //     context: ctx,
        //     fontFamily: "Verdana",
        //     fontSize: "14px",
        //     fontWeight: "normal",
        //     fontColor: "#000",
        //     lineHeight: "22"
        // });
        // CanvasText.defineClass("blue",{
        //     fontSize: "16px",
        //     fontColor: "#00F",
        //     fontFamily: "Georgia",
        //     fontWeight: "bold"
        // });
        // var text = 'I like <class="blue">blue</class> color!';
        // CanvasText.drawText({
        //     text:text,
        //     x: 0,
        //     y: 30,
        //     boxWidth: 200 // Optional.
        // });

    }




});

