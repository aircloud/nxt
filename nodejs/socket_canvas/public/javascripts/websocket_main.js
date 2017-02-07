/**
 * Created by hh on 28/7/2016.
 */
$(function(){
    var i=0;
    var message = $('#m');

    var socket = io.connect('115.29.102.81:8090');

    socket.on('open',function(){
        console.log('connected');
        socket.send('success');
    });

    socket.on('test',function(json){
       console.log('message:',json);
    });

    $('form').submit(function(){
        socket.emit('chat message', message.val());
        message.val('');
        return false;
    });
});
