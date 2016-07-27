/**
 * Created by hh on 23/7/2016.
 */
var mongoose = require('mongoose');
var app = require("../../app");

require("../../config/mongoose");

var item = mongoose.model('item');

// var books = new item({
//     title: "MEAN Web Development",
//     content: "Green",
//     creatTime: new Date()
// });

module.exports = {

    create:function(req, res, next){
        var this_item = new item(req.body);
        console.log("function parameters: ,",this_item);


        console.log("param",this_item.title);
        console.log("param",this_item.order);
        console.log("param",this_item.done);


        // res.end();

        item.find({order:this_item.order}).count().exec(function(err,number){
            // number = number.count();
            console.log(number);
            if(number==0){
                this_item.save(function(err){
                    if(err) return next(err);
                    return res.json(this_item);
                });
            }
            else{

                 item.findOne({order:this_item.order}).exec(function(err,info){
                   var thisid = info._id;console.log("to update...");
                   item.update({ _id: thisid }, { $set: {id:this_item.id,title:this_item.title,order:this_item.order,done:this_item.done}},function(err,info){
                       console.log('update finished');
                       return  res.json(this_item);

                   });
                 });
                 //this_item.update();
                 //console.log(number);
            }

            // res.end();
        });
       // console.log("create function",this_item);
        //var this_item = new item(req.body);

        //也有可能是save操作,自己在这里分析一下


    },

    list:function (req,res,next) {
        console.log('get...');
        item.find({},'-_id id title order done').exec(function (err, content) {
            if(err) {
                console.log(err);
                return next(err);
            }
            console.log("return",content);
            // return content;
            return res.json(content);
        });
    },
    list_one:function (req,res,next) {
        console.log(req.body);
        var this_item = new item(req.body);

        item.findOne({order:this_item.order}).exec(function(err,info){
            var thisid = info._id;console.log("to update...");
            item.update({ _id: thisid }, { $set: {id:this_item.id,title:this_item.title,order:this_item.order,done:this_item.done}},function(err,info){
                console.log('update finished');
                return  res.json(this_item);

            });
        });

        // item.find({order:req.params.id}, function(err,content){
        //     if(err) {
        //         console.log(err);
        //         return next(err);
        //     }
        //     console.log("return",content);
        //     // return content;
        //     return res.json(content);
        // });
    },
    delete_item:function(req,res,next){
        console.log("delete begin...");
        item.remove({order:req.params.id}, function(err,content){
            if(err)next(err);
            console.log("delete ok...");
            res.json(content);
        });
    }
};

