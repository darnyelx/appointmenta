AmCharts.makeChart("NBS-alc-bev-chart", {
	"type": "line",
	"categoryField": "date",
	"dataDateFormat": "YYYY-MM-DD",
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"parseDates": true
		//		"title": ""
	},
	"graphs": [
		{
			"balloonColor": "#E7E7E7",
			"id": "AmGraph-1",
			"title": "graph 1",
			"type": "column",
			"valueField": "gdp",
			"fillAlphas": 0.8,
			"fillColors": "#2DB72D",
			"lineColor": "undefined",
			"angle": 30,
			"depth3D": 10,
			"theme": "pattern",
			//			"plotAreaBorderAlpha": 1,
			//			"plotAreaBorderColor": "#2C7030",
			//			"plotAreaFillAlphas": 0.48,
			//			"plotAreaFillColors": "#2DB72D",
			"startDuration": 1
		}
	],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"inside": true
			//			"title": "GDP"
		}
	],
	"chartCursor": {
		"enabled": true,
		"balloonPointerOrientation": " vertical",
		"categoryBalloonColor": "grey"
	},
	"chartScrollbar": {
		"enabled": true
	},
	"trendLines": [],
	"guides": [],
	"allLabels": [],
	"balloon": {
		"fillColor": "grey"
	},
	"titles": [
		{
			"id": "Title-1",
			"size": 10,
			"text": "Agric GDP to Total GDP"
		}
	],
	"dataProvider": nbsalcbevchartData
});
