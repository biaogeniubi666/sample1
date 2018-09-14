
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
            xhr = null ;
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
        xhr = null ;
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