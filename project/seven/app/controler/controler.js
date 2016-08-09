/**
 * Created by hh on 5/8/2016.
 */

var mongoose = require('mongoose');
var app = require("../../app");

require("../../config/mongoose");

var mytime = mongoose.model('mytime');

module.exports = {
   save:function(req,res,next){
       console.log('begin...');
       var this_mytime = new mytime(req.body);
       if (req.cookies.isVisit) {
           console.log('not the first...');
           console.log(req.cookies.total);
           //说明这个人不是第一次访问了
           if(req.cookies.total==this_mytime.total){
               console.log('total...');

               // 这个时候只计算不增加
               mytime.find({total:{"$lte":this_mytime.total}}).count().exec(function(err,result){
                   console.log('find first ok...');
                   console.log(result);


                   var all_lessthan = result;
                   mytime.find({}).count().exec(function(err,all){
                       var all_number = all;
                       if(all_number==0)
                       var percent = 0;
                       else{
                           percent=all_lessthan/all_number;
                           percent=percent*100;
                           percent=percent.toFixed(2)+"%";
                       }
                       res.json({'percent':percent});
                   })
               });
           }
           else{
               res.cookie('total',this_mytime.total,{maxAge: 60 * 1000 * 24 * 60});
               mytime.find({total:{"$lte":this_mytime.total}}).count().exec(function(err,result){
                   console.log(result);

                   var all_lessthan = result;
                   mytime.find({}).count().exec(function(err,all){
                       var all_number = all;
                       if(all_number==0)
                           var percent = 0;
                       else{
                           if(this_mytime.year=='2016'&&this_mytime.month=='1'&&this_mytime.day=='1') percent=all_lessthan/(all_number);
                           else{percent=all_lessthan/(all_number+1);}
                           percent=percent*100;
                           percent=percent.toFixed(2)+"%";
                       }
                       if(this_mytime.year=='2016'&&this_mytime.month=='1'&&this_mytime.day=='1'){
                           console.log('no insert');
                           res.json({'percent': percent});
                       }
                       else {
                           this_mytime.save(function (err, result) {
                               res.json({'percent': percent});
                           });
                       }
                   })
               });
           }

       }
       else{
           console.log(' first...');
           console.log(this_mytime.total);
           res.cookie('isVisit', 1, {maxAge: 60 * 1000 * 24 * 60 });
           res.cookie('total',this_mytime.total,{maxAge: 60 * 1000 * 24 * 60});
           mytime.find({total:{"$lte":this_mytime.total}}).count().exec(function(err,result){
               console.log(' first select ...');
               console.log(result);
               var all_lessthan = result;
               mytime.find({}).count().exec(function(err,all){
                   var all_number = all;
                   if(all_number==0)
                       var percent = 0;
                   else{
                       if(this_mytime.year=='2016'&&this_mytime.month=='1'&&this_mytime.day=='1') percent=all_lessthan/(all_number);
                       else{percent=all_lessthan/(all_number+1);}
                       percent=percent*100;
                       percent=percent.toFixed(2)+"%";
                   }
                   if(this_mytime.year=='2016'&&this_mytime.month=='1'&&this_mytime.day=='1'){
                                               console.log('no insert');
                       res.json({'percent': percent});
                   }
                   else {
                       this_mytime.save(function (err, result) {
                           res.json({'percent': percent});
                       });
                   }
               })
           });
       }

   }


};