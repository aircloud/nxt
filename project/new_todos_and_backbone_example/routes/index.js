var express = require('express');
var router = express.Router();

var controller = require("../app/controllers/controller");
/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});


router.get('/2', function(req, res, next) {
  res.render('index', { title: 'Express2' });

});

router.delete('/gettodos/:id',controller.delete_item);

router.put('/gettodos/:id',controller.create);

router.get('/gettodos',
    controller.list
    // function(req,res,next){
    // var result = controller.list();
    // var result2 =  [{
    //     title: " todo...",
    //     order: 1,
    //     done: false
    // }];
    // console.log("result",result);
    // console.log("result2",result2);
    // //res.json( controller.list());
    //     res.json(result);
// }
);
router.post('/gettodos',controller.create
    // var result = controller.create(req.body);
    // console.log(result);
    // console.log(req.body);
);




router.get('/todos', function(req, res, next) {
   var result = controller.list;
   result();
    // console.log(res);
   // console.log('123123');
   // res.render('index', { title: 'todos' });
    console.log(res.json(result));

    return res.json(result);

});

router.get('/create', function(req, res, next) {
    var result =  controller.create;
  // console.log('123123');
  //   console.log(res);
  //   console.log(res.json(result));

    return res.json(result);
    // res.render('index', { title: 'todos' });

});

module.exports = router;
