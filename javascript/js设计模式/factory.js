//工厂模式相当于把实例化的过程放到了子类中。

    var master = function (){
        this.type="master";
        this.year="3";
    };
    var doctor = function (){
        this.type="doctor";
        this.year="2";
    };
    var collegestudent = function (){
        this.type="college";
        this.year="4";
    };
    function myfactory(type){
        switch (type){
            case "master":
                return new master();
                break;
            case "doctor":
                return new doctor();
                break;
            case "collegestudent":
                return new collegestudent();
                break;
        }
    }

    var myabstractfactory = function(){
        var types={};

        return{
            addtype:function(type,obj){
                types[type]=obj;
            },
            createobject:function(type){
                if(!types.hasOwnProperty(type)){
                    return {"error":1};
                }
                else{
                    var result = {};
                    for ( var p in types[type] ){
                        result[p]=types[type][p];
                    }
                    return result;
                    //这是一个例子而已,真正深拷贝的时候可别这样。
                }

            }
        }
    };

    var me = myfactory("master");
    console.log(me);


    var example1 = myabstractfactory();
    example1.addtype("master",{type:"master",year:3});
    var brother = example1.createobject("master");
    console.log("b",brother);

    var brother2 = example1.createobject("master");
    brother2.type="change";
    console.log("b2",brother2);
    console.log("b",brother);
