var chart = am4core.createFromConfig({
		// ... chart config
		"data": [
			{
				"country": "Lithuania",
				"litres": 501.9,
				"units": 250
  },
			{
				"country": "Czech Republic",
				"litres": 301.9,
				"units": 222
  },
			{
				"country": "Ireland",
				"litres": 201.1,
				"units": 170
  },
			{
				"country": "Germany",
				"litres": 165.8,
				"units": 122
  },
			{
				"country": "Australia",
				"litres": 139.9,
				"units": 99
  },
			{
				"country": "Austria",
				"litres": 128.3,
				"units": 85
  },
			{
				"country": "UK",
				"litres": 99,
				"units": 93
  },
			{
				"country": "Belgium",
				"litres": 60,
				"units": 50
  },
			{
				"country": "The Netherlands",
				"litres": 50,
				"units": 42
  }
		],

		"xAxes": [{
			"type": "CategoryAxis",
			"dataFields": {
				"category": "country",
				"title": {
					"text": "Countries"
				}
			}
  }],

		"yAxes": [{
			"type": "ValueAxis",
			"title": {
				"text": "Litres sold (M)"
			}
  }],

		"series": [
			{
				"type": "ColumnSeries",
				"dataFields": {
					"valueY": "litres",
					"categoryX": "country"
				},
				"name": "Sales",
				"columns": {
					"tooltipText": "Series: {name}\nCategory: {categoryX}\nValue: {valueY}",
					"stroke": "#ff0000",
					"fill": "#00ff00"
				},
				"stroke": "#CDA2AB",
				"strokeWidth": 3
  },
			{
				"type": "ColumnSeries",
				"dataFields": {
					"valueY": "units",
					"categoryX": "country"
				},
				"name": "Units",
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
	}, "GPD-chart",
	am4charts.XYChart);
