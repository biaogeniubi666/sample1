
function zhe([data1,data2]){
 // 基于准备好的dom，初始化echarts实例
var myChart = echarts.init(document.getElementById('main'),'chalk');
// 指定图表的配置项和数据
option = {
	xAxis: {
		type: 'category',
		data: ['一','二','三','四','五','六','七','八','九','十','十一','十二','十三','十四','十五']
	},
	yAxis: {
		type: 'value'
	},
	series: [
    {
		data: data1, //数组
		type: 'line'
    },
    {
		data: data2, //数组
		type: 'line'
    }
    ]
};

// 使用刚指定的配置项和数据显示图表。
myChart.setOption(option);
}

function initAjax(){
$.ajax({
		url:'/gettem_and_hum_chart',
		dataType:'json',
		type:'get',
		success:function([data1,data2]){ //data一定要是这样的[820, 932, 901, 934, 1290, 1330, 1320]
			console.log([data1,data2]);
			zhe([data1,data2])
			// zhe([820, 932, 901, 934, 1290, 1330, 1320])
		}
	})
}		
		

