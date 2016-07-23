jQuery.extend(jQuery.validator.messages, {
    required: "必选字段",
    remote: "请修正该字段",
    email: "请输入正确格式的电子邮件",
    url: "请输入合法的网址",
    date: "请输入合法的日期",
    dateISO: "请输入合法的日期 (ISO).",
    number: "请输入合法的数字",
    digits: "只能输入整数",
    creditcard: "请输入合法的信用卡号",
    equalTo: "请再次输入相同的值",
    accept: "请输入拥有合法后缀名的字符串",
    maxlength: jQuery.validator.format("请输入一个 长度最多是 {0} 的字符串"),
    minlength: jQuery.validator.format("请输入一个 长度最少是 {0} 的字符串"),
    rangelength: jQuery.validator.format("请输入 一个长度介于 {0} 和 {1} 之间的字符串"),
    range: jQuery.validator.format("请输入一个介于 {0} 和 {1} 之间的值"),
    max: jQuery.validator.format("请输入一个最大为{0} 的值"),
    min: jQuery.validator.format("请输入一个最小为{0} 的值")
});

function setMinWidth(width) {

    var bWidth = ($(window).width() <= width) ? width : '100%';
    $('body').width(bWidth);

    // 窗口放大缩小
    $(window).resize(function () {

        var bWidth = ($(window).width() <= width) ? width : '100%';
        $('body').width(bWidth);

    });

}

$(function () {

    setMinWidth(200);

});

//jQuery.validator.addMethod("filesize", function(value, element) {
//    var size=$("#filein").file[0].size;
//    size=size/1024;
//    return (size>10000);
//}, $.validator.format("文件稍大了哦，请直接底部联系qq客服"));

