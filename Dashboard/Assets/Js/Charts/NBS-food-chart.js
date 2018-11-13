AmCharts.makeChart("NBS-food-chart", {
	"type": "serial",
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
			"balloonColor": "#E7E7E8",
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
		"dataProvider": nbsFoodChartData,
//	"dataProvider": [
//		{
//			"date": "2014-03-01",
//			"gdp": 0.5
//		},
//		{
//			"date": "2014-03-02",
//			"gdp": 0.23
//		},
//		{
//			"date": "2014-03-03",
//			"gdp": 0.3
//		},
//		{
//			"date": "2014-03-04",
//			"gdp": 0.4
//		},
//		{
//			"date": "2014-03-05",
//			"gdp": 0.12
//		}, {
//			"date": "2014-03-06",
//			"gdp": 0.23
//		},
//		{
//			"date": "2014-03-07",
//			"gdp": 0.3
//		},
//		{
//			"date": "2014-03-08",
//			"gdp": 0.21
//		},
//	{
//		"date": "2014-03-09",
//		"gdp": 12
//		},
//	{
//		"date": "2014-03-10",
//		"gdp": 17
//		},
//	{
//		"date": "2014-03-11",
//		"gdp": 18
//		},
//	{
//		"date": "2014-03-12",
//		"gdp": 21
//		},
//	{
//		"date": "2014-03-13",
//		"gdp": 24
//		},
//	{
//		"date": "2014-03-14",
//		"gdp": 23
//		},
//	{
//		"date": "2014-03-15",
//		"gdp": 24
//		}
//	];
});
