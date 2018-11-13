<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<script src="../js/echarts.common.min.js"></script>
<script src="../lib/js/jquery.min.js"></script>
<body>
 <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
<div id="main" style="width: 600px;height:400px;"></div>

<script>
function zhe(data){
 // 基于准备好的dom，初始化echarts实例
var myChart = echarts.init(document.getElementById('main'));
// 指定图表的配置项和数据
option = {
	xAxis: {
		type: 'category',
		data: ['周一','周二','周三','周四','周五','周六','周日']
	},
	yAxis: {
		type: 'value'
	},
	series: [{
		data: data, //数组
		type: 'line'
	}]
};

// 使用刚指定的配置项和数据显示图表。
myChart.setOption(option);
}

function initAjax(){
$.ajax({
		url:'/getserial_chart',
		dataType:'json',
		type:'get',
		success:function(data){ //data一定要是这样的[820, 932, 901, 934, 1290, 1330, 1320]
			console.log(data);
			zhe(data)
			// zhe([820, 932, 901, 934, 1290, 1330, 1320])
		}
	})
}		
initAjax();
setInterval(function(){		
	initAjax();
},5000)		

</script>
</body>
</html>