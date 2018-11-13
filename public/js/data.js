
function shuaxinserial()
{
     $.ajax({
        type: "get",  //数据提交方式（post/get）
        url: "/getserial",  //提交到的url
        // data: {id:id,password:password},//提交的数据
        dataType: "json",//返回的数据类型格式
        success: function(result){
           var i = result ;
            var x = document.getElementById("sermsg");
            x.innerHTML = i; 
            x = null ;
            i= null; 
            },
        complete: function (xhr) {
            xhr = null ; // 释放请求兑现的内存
            },
        });                                                                                                                                                 
}

function  shuaxin_tem()
{  
   $.ajax({
    type: "get",  //数据提交方式（post/get）
    url: "/gettem",  //提交到的url
    dataType: "json",//返回的数据类型格式
    success: function(result){
    var i = result ;
    var x = document.getElementById("temmsg");
    x.innerHTML = i; 
    x = null ;
    i= null; 
    },
    complete: function (xhr) {
        xhr = null ;   //释放xml请求对象的内存
        },
    });                                                                                                                                           
}

function  shuaxin_hum()
{
    $.ajax({
        type: "get",  //数据提交方式（post/get）
        url: "/gethum",  //提交到的url
        dataType: "json",//返回的数据类型格式
        success: function(result){
            var i = result ;
            var x = document.getElementById("hummsg");
            x.innerHTML = i;                                                                         
            x = null ;
            i= null; 
            
        },
        complete: function (xhr) {
            xhr = null;                                    
        },
    });                                                                                                                                         
}  

function  lightup_control()
{
    $.ajax({
        type: "get",  //数据提交方式（post/get）
        url: "/getup",  //提交到的url
        // dataType: "json",//返回的数据类型格式
        success: function (result) {//result和data没关系
            console.log(result);//打印服务端返回的数据(调试用)
            if (result.resultCode == 200) {
                alert("SUCCESS");
            };
        },
        error : function() {
            alert("异常！");
        }
    });                                                                                                                                         
}  

function  lightdown_control()
{
    $.ajax({
        type: "get",  //数据提交方式（post/get）
        url: "/getdown",  //提交到的url
        // dataType: "json",//返回的数据类型格式
        success: function (result) {//result和data没关系
            console.log(result);//打印服务端返回的数据(调试用)
            if (result.resultCode == 200) {
                alert("SUCCESS");
            };
        },
        error : function() {
            alert("异常！");
        }
    });                                                                                                                                         
} 