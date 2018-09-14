@extends('layout.default')
@section('title', 'nimabi')
@section('content')

{{-- 串口数据动态显示 --}}
<div class="wenshi">
    <div class="responsive">
        <div class="img">  <!--这个模块属性名为img，管理以下图片和文字 -->
            <a target="_blank" href="imges\wenshidu.jpg">
                <img src="imges\wenshidu.jpg" alt="温斯杜"></a>
                    <div class='desc'>
                        <h2 id = 'msg'>
                        <script>
                        function shuaxin(){
                        $(document).ready(function(){
                        // $("button").click(function(){
                        $("#msg").load("/getmsg");
                        });
                        setTimeout("shuaxin()", 1000);
                        }
                        shuaxin();
                        </script>
                        </h2>
                    </div>
        </div>
    </div>
</div>


{{-- 动态时间显示 --}}
<p id="demo">
<script>
function displayDate(){
    document.getElementById("demo").innerHTML=Date();
    setTimeout("displayDate()", 1000);
    }
    displayDate();
</script>        
</p>
        
@stop


{{-- 串口数据动态显示测试2 失败--}}
{{-- 
<h3 id = 'msg1'>
网站名称: <span id="jname"></span><br /> 
<button type="button" onclick="shuaxin()">点击这里</button>
网站地址: <span id="jurl"></span><br /> 
网站 slogan: <span id="jslogan"></span><br />  
</h3>
<script>
function shuaxin(){
$(document).ready(function(){
        // $("button").click(function(){
        $("jname").load("/getmsg")
        });
document.getElementById("jname").innerHTML=$serials->data;
setTimeout("shuaxin()", 1000);
        }
        
</script> 
--}}