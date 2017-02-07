var express = require('express');
var cheerio = require('cheerio');
var router = express.Router();

/* GET home page. */
// router.get('/', function(req, res, next) {
//   // res.render('index', { title: 'Express' });
//   var request = require('request');
//   request('http://www.baidu.com', function (error, response, body) {
//     if (!error && response.statusCode == 200) {
//       $ = cheerio.load(body);// Show the HTML for the Google homepage.拿到了整个body的前端选择器
//       // res.json({
//       //   'classnum':1
//       // });
//       // res.send(body);
//     }
//   });
// });

// router.get('/', function(req, res, next) {
//    res.end(11);
// });
router.get('/', function(req, res, next) {
  res.send('respond with a resource');
});


module.exports = router;
