/**
 * Created by hh on 23/7/2016.
 */
// var express = require('express');
var mongoose = require('mongoose');

var config = require("./config");

uri = config.mongodb;

mongoose.connect(uri);

var item = new mongoose.Schema({
   title:String,
   id:Number,
   order:Number,
   done:Boolean
});

mongoose.model('item',item);