var express = require('express');
var router = express.Router();

var multipart = require('connect-multiparty');
var multipartMiddleware = multipart();

var fs = require('fs');

router.all('/', function (req, res) {
    res.sendFile('../public/index.html');
});

router.post('/upload', multipartMiddleware, function(req, res) {
    console.log(req.body);
    console.log(req.files);

    // ɾ����ʱ�ļ�
    fs.unlink(req.files.myfile.path);

    res.send("upload success!");
});

router.post('/upload2', multipartMiddleware, function(req, res) {
    console.log(req.body);
    console.log(req.files);

    // ʵ�ʱ��ʱ��һ��Ҫ����ʱ�ļ��ƶ���Ŀ��λ�ã�֮��ɾ����ʱ�ļ�
    // �γ���Ϊ�򻯲�����ֱ�ӽ���ʱ�ļ�����Ŀ���ļ�
    var fpath = req.files.myfile.path;
    var fname = fpath.substr(fpath.lastIndexOf('\\') + 1);

    setTimeout(function() {
        var ret = ["<script>",
            "window.parent.uploadFinished('" + fname + "');",
            "</script>"];
        res.send(ret.join(""));
    }, 3000);

});

router.post('/upload3', multipartMiddleware, function(req, res) {
    console.log(req.body);
    console.log(req.files);

    // ʵ�ʱ��ʱ��һ��Ҫ����ʱ�ļ��ƶ���Ŀ��λ�ã�֮��ɾ����ʱ�ļ�
    // �γ���Ϊ�򻯲�����ֱ�ӽ���ʱ�ļ�����Ŀ���ļ�
    var fpath = req.files.myfile.path;
    var fname = fpath.substr(fpath.lastIndexOf('\\') + 1);

    res.json({fname: fname});
});

module.exports = router;