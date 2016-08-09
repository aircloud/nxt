/**
 * Created by hh on 5/8/2016.
 */
var mongoose = require('mongoose');

var config = require("./config");

uri = config.mongodb;

mongoose.connect(uri);

var myTime = new mongoose.Schema({
    id:Number,
    year:String,
    month:String,
    day:String,
    total:Number
});

mongoose.model('mytime',myTime);