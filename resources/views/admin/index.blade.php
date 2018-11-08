@extends('layout.default1')
@section('title', '主页1')

@section('content')


        {{--以上是上方导航栏  --}}

        {{-- 以下是左侧导航栏容 --}}
             
        <!-- Main Content -->
        <div class="container-fluid">
            <div class="side-body padding-top">
                {{-- 动态显示红黄绿蓝 --}}
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="#">
                            <div class="card red summary-inline">
                                <div class="card-body">
                                    <i class="icon fa fa-circle-o fa-4x"></i>
                                    <div class="content">
                                        <div class="title" id="sermsg">
                                            <script>
                                        $(function(){
                                            shuaxinserial();
                                            setInterval(function()
                                                {
                                                    shuaxinserial();
                                                }, 3000);
                                        }); 
                                            </script> 
                                        </div>
                                        <div class="sub-title">串口数据</div>
                                    </div>
                                    <div class="clear-both"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="#">
                            <div class="card yellow summary-inline">
                                <div class="card-body">
                                    <i class="icon fa fa-ellipsis-h fa-4x"></i>
                                    <div class="content">
                                        <div class="title" id="temmsg">
                                                <script>
                                                    $(function(){
                                                            shuaxin_tem();
                                                            setInterval(function()
                                                                {
                                                                    shuaxin_tem();
                                                                }, 3750);
                                                        });       
                                                </script>  
                                        </div>
                                        <div class="sub-title">室内温度</div>
                                    </div>
                                    <div class="clear-both"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="#">
                            <div class="card green summary-inline">
                                <div class="card-body">
                                    <i class="icon fa fa-ellipsis-v fa-4x"></i>
                                    <div class="content">
                                        <div class="title" id ="hummsg">
                                                <script>
                                                        $(function(){
                                                                shuaxin_hum();
                                                                setInterval(function()
                                                                    {
                                                                        shuaxin_hum();
                                                                    }, 3500);
                                                            });     
                                                        </script> 
                                        </div>
                                        <div class="sub-title">室内湿度</div>
                                    </div>
                                    <div class="clear-both"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <a href="#">
                            <div class="card blue summary-inline">
                                <div class="card-body">
                                    <i class="icon fa fa-share-alt fa-4x"></i>
                                    <div class="content">
                                        <div class="title">3</div>
                                        <div class="sub-title">告警次数</div>
                                    </div>
                                    <div class="clear-both"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                {{-- 红黄绿蓝下边的其他表格 --}}
                <div class="row  no-margin-bottom">
                    {{-- 以下为左边动态表格内容 --}}
                    <div class="col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="card primary">
                                    {{-- <div class="card-jumbotron no-padding"> --}}
                                        <div id="main" style="width: 600px;height:400px;"></div>
                                        <script src="../js/echarts.common.min.js"></script>
                                        <script src="../js/chalk.js"></script>
                                            <script>
                                                $(function(){
                                                initAjax();
                                                setInterval(function(){
                                                    initAjax();
                                                }, 1000);
                                                }); 
                                            </script>
                                    {{-- </div>  --}}
                                    <div class="card-body half-padding">
                                        <h4 class="float-left no-margin font-weight-300">温湿度变化</h4>
                                        <h2 class="float-right no-margin font-weight-300"></h2>
                                        <div class="clear-both"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 右边4个 --}}
                    <div class="col-sm-6 col-xs-12">
                            <div class="row">
                            {{-- switch开关 --}}
                                    <div class="col-md-6 col-sm-12">
                                        <div class="card primary">
                                            <input name="status" type="checkbox" >
                                                <script type="text/javascript">
                                                    $("[name='status']").bootstrapSwitch({ 
                                                        onText:"照明",         
                                                        offText:"熄灭",        
                                                        onColor:"success",         
                                                        offColor:"info",         
                                                        size:"large",         
                                                        onSwitchChange:function(event,state){             
                                                            if(state==true){                 
                                                                $(this).val("1");                 
                                                                console.log("开启");
                                                                // 利用控制器处理
                                                                $(function(){lightup_control();
                                                                });  
                                                                }
                                                            else{                 
                                                                $(this).val("2");              
                                                                console.log("关闭");
                                                                $(function(){lightdown_control();
                                                                });                
                                                                }                                                                
                                                            }     
                                                        });
                                                </script>                          
                                            <div class="card-body half-padding">
                                                <h4 class="float-left no-margin font-weight-300">LED开关</h4>
                                                <div class="clear-both"></div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="col-md-6 col-sm-12">
                                        <div class="card primary">
                                            <div class="card-jumbotron no-padding">
                                                <canvas id="jumbotron-line-chart" class="chart no-padding"></canvas>
                                            </div>
                                            <div class="card-body half-padding">
                                                <h4 class="float-left no-margin font-weight-300">Pages view</h4>
                                                <div class="clear-both"></div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="col-md-6 col-sm-12">
                                        <div class="card primary">
                                            <div class="card-jumbotron no-padding">
                                                <canvas id="jumbotron-line-chart" class="chart no-padding"></canvas>
                                            </div>
                                            <div class="card-body half-padding">
                                                <h4 class="float-left no-margin font-weight-300">摄像头1</h4>
                                                <div class="clear-both"></div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="col-md-6 col-sm-12">
                                            <div class="card primary">
                                                <div class="card-jumbotron no-padding">
                                                    <canvas id="jumbotron-line-chart" class="chart no-padding"></canvas>
                                                </div>
                                                <div class="card-body half-padding">
                                                    <h4 class="float-left no-margin font-weight-300">摄像头2</h4>
                                                    <div class="clear-both"></div>
                                                </div>
                                            </div>
                                    </div>
        
                            </div>
                        </div>
                
                    </div>
                </div>
            </div>        
        </div>
 
         
@stop