var express = require('express');
var path = require('path');
var favicon = require('serve-favicon');
var logger = require('morgan');
var cookieParser = require('cookie-parser');
var bodyParser = require('body-parser');

var routes = require('./routes/index');
var users = require('./routes/users');
var lessMiddleware = require('less-middleware');

console.log(__dirname);

var app = express();
var pubDir = path.join(__dirname, 'public');
// app.use(lessMiddleware({
//   dest: '/css', // 应该是在浏览器地址栏里访问地址
//   src: '/less', //或者 '../less' 如果less文件地址是在/public外头（也就是项目的根目录下）
//   root: pubDir,
//   force: true,
//   debug: true
// }));
app.use(lessMiddleware(__dirname + '/public',{
  debug: true
  }
));
// app.use(lessMiddleware(path.join(__dirname, 'public')));
// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'jade');

// uncomment after placing your favicon in /public
//app.use(favicon(path.join(__dirname, 'public', 'favicon.ico')));
app.use(logger('dev'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));

app.use('/', routes);
app.use('/users', users);

// catch 404 and forward to error handler
app.use(function(req, res, next) {
  var err = new Error('Not Found');
  err.status = 404;
  next(err);
});
// app.use(require('less-middleware')(path.join(__dirname, 'public'),

// error handlers

// development error handler
// will print stacktrace
if (app.get('env') === 'development') {
  app.use(function(err, req, res, next) {
    res.status(err.status || 500);
    res.render('error', {
      message: err.message,
      error: err
    });
  });
}

// production error handler
// no stacktraces leaked to user
app.use(function(err, req, res, next) {
  res.status(err.status || 500);
  res.render('error', {
    message: err.message,
    error: {}
  });
});


module.exports = app;
