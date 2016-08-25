var Vue = require('vue');
import dynamics from 'dynamics.js';
require('../less/m.less');

import indexArticle from '../vuemodule/indexArticle.vue';

var sideBar = document.getElementById('side');
var mycontent=document.getElementById("mycontent");
var tabSide =document.getElementById("tab_side");
var fixMenu = document.getElementById("fix_menu");

// Vue.component('page-component', indexArticle);

function preventDef(e){
    e.preventDefault && e.preventDefault();
    e.stopPropagation && e.stopPropagation();
    e.cancelBubble = true;
    e.returnValue = false;
}

var vm = new Vue({
    // 选项
    el : '#app',

    // components:{
    //     pageComponent:indexArticle
    // },

    data:{
        sideShow:false,
        menuShow:true,
        start:{
            x:0,
            y:0
        },
        sideBar:false,
        article:{title:"这是一个title",content:"这是一个内容"}
    },

    methods:{
        showSideBar:function(){
            dynamics.animate(sideBar, {
                left:-180
            }, {
                type: dynamics.spring,
                friction: 250,
                duration: 700
            });
            this.sideBar=true;
        },
        hideSideBar:function(){
            preventDef(e);
            // e.preventBubble();
            if(this.sideBar==true){
                dynamics.animate(sideBar, {
                    left:-360
                }, {
                    type: dynamics.spring,
                    friction: 400,
                    duration: 1200
                });
            }
        },
        startDrag: function (e) {
            if(this.sideBar){
                preventDef(e);
                e = e.changedTouches ? e.changedTouches[0] : e;
                this.start.x = e.pageX;
                this.start.y = e.pageY;
                console.log("startDrag",e.pageX,e.pageY);
            }
        },
        onDrag: function (e) {
            if(this.sideBar){
                preventDef(e);
                e = e.changedTouches ? e.changedTouches[0] : e;
                console.log("onDrag",e.pageX,this.start.x);
                if(e.pageX<this.start.x){
                    if(parseFloat(sideBar.style.left)>-360) {
                        console.log(parseFloat(sideBar.style.left) - (this.start.x - e.pageX));
                        console.log("onDrag",e.pageX,this.start.x);
                        sideBar.style.left = (parseFloat(sideBar.style.left) - (this.start.x-e.pageX))+"px";
                        this.start.x=e.pageX;
                    }
                }
            }
        },
        stopDrag: function (e) {
            if(this.sideBar){
                preventDef(e);
                e = e.changedTouches ? e.changedTouches[0] : e;
                console.log("stopDrag",e.pageX,e.pageY);
                if(parseFloat(sideBar.style.left)>-270) {
                    dynamics.animate(sideBar, {
                        left:-180
                    }, {
                        type: dynamics.linear,
                        duration: 1
                    });
                }
                else{
                    this.sideBar=false;
                    dynamics.animate(sideBar, {
                        left:-360
                    }, {
                        type: dynamics.spring,
                        friction: 400,
                        duration: 600
                    });
                }
            }
        }
    }
});

window.onscroll=function () {
    var scrolltop = document.documentElement.scrollTop||document.body.scrollTop;
    // mycontent.innerHTML=mycontent.innerHTML+scrolltop+"scroll<br/>";
    if(scrolltop<152){
        tabSide.style.top=(53-scrolltop/4)+"px";
        fixMenu.style.opacity=scrolltop/152;
    }
    else if(scrolltop>152){
        tabSide.style.top="15px";
        fixMenu.style.opacity=1;
    }

};

