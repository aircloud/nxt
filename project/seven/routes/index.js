var express = require('express');
var router = express.Router();
var controller = require("../app/controler/controler");

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});

router.get('/savetime',controller.save);
router.put('/savetime',controller.save);
router.post('/savetime',controller.save);

router.get('/c', function (req, res) {
// 如果请求中的 cookie 存在 isVisit, 则输出 cookie
// 否则，设置 cookie 字段 isVisit, 并设置过期时间为1分钟
  if (req.cookies.isVisit) {
    console.log(req.cookies);
    var all_number = 20;
    var all_lessthan=12;
    if(all_number==0)
      var percent = 0;
    else{
      percent=all_lessthan/all_number;
      percent=percent*100;
      percent=percent+"%";
    }
    res.send(percent);
  } else {
    res.cookie('isVisit', 1, {maxAge: 60 * 1000});
    res.send("欢迎第一次访问");
  }
});

module.exports = router;
