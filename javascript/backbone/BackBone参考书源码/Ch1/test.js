/**
 * Created by Xiaotao.Nie on 2017/2/6.
 * All right reserved
 * IF you have any question please email onlythen@yeah.net
 */

var fragment = 'https://www.10000h.top/article.html#article/55';

var pathStripper = /#.*$/;

fragment = fragment.replace(pathStripper, '');

console.log(fragment);

function test(a,b){
    a=3;
    console.log(a);
}

test(2,4);

s=[
    {
        a:3,b:2
    },
    {
        a:3,b:1
    },
    {
        a:2,b:1
    }
];

console.log(s.sort([s.a,s.b]));