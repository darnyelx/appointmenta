var chart = am4core.createFromConfig({
		// ... chart config
		"data": [
			{
				"year": "2000",
				"price 1": 501.9,
				"price 2": 250
  },
			{
				"year": "2001",
				"price 1": 301.9,
				"price 2": 222
  },
			{
				"year": "2002",
				"price 1": 201.1,
				"price 2": 170
  },
			{
				"year": "2003",
				"price 1": 165.8,
				"price 2": 122
  },
			{
				"year": "2004",
				"price 1": 139.9,
				"price 2": 99
  },
			{
				"year": "2005",
				"price 1": 128.3,
				"price 2": 85
  },
			{
				"year": "2006",
				"price 1": 99,
				"price 2": 93
  },
			{
				"year": "2007",
				"price 1": 60,
				"price 2": 50
  },
			{
				"year": "2008",
				"price 1": 300,
				"price 2": 200
  }
		],

		"xAxes": [{
			"type": "CategoryAxis",
			"dataFields": {
				"category": "year",
				"title": {
					"text": "Years"
				}
			}
  }],

		"yAxes": [{
			"type": "ValueAxis",
			"title": {
				"text": "price sold"
			}
  }],

		"series": [
			{
				"type": "LineSeries",
				"dataFields": {
					"valueY": "price 1",
					"categoryX": "year"
				},
				"name": "Beans",
				"columns": {
					"tooltipText": "Series: {name}\nCategory: {categoryX}\nValue: {valueY}",
					"stroke": "#ff0000",
					"fill": "#00ff00"
				},
				"stroke": "#CDA2AB",
				"strokeWidth": 3
  },
			{
				"type": "LineSeries",
				"dataFields": {
					"valueY": "price 2",
					"categoryX": "year"
				},
				"name": "Cassava",
				"columns": {
					"tooltipText": "Series: {name}\nCategory: {categoryX}\nValue: {valueY}",
					"stroke": "#CDA2AB",
					"fill": "rgb(52, 74, 52)"
				},
				"strokeWidth": 3
  }
		],

 		"legend": {
    // We can skip "type" here since there's only
    // one type of legend available, so the chart
    // will be able to figure this out for itself.
  }
	}, "NBS-food-chart",
	am4charts.XYChart);
