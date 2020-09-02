/*
Template Name: Scare - Responsive Bootstrap 4 Admin Dashboard
Author: CoderThemes
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: Dashboard 2 init
*/
//Datepicker
$('#dash-daterange').flatpickr({
	altInput: true,
	mode: "range",
	altFormat: "F j, y",
    defaultDate: 'today',
    locale: 'ko'
});


$( document ).ready(function() {

    var createCombineGraph = function(selector, ticks, labels, datas, colors) {
		var data = [{
			label : labels[0],
			data : datas[0],
			color : colors[0],
			bars : {
				show : true
			}
		}, {
			label : labels[1],
			data : datas[1],
			color : colors[1],
			lines : {
				show : true
			},
			points : {
				show : true
			}
		}];
		var options = {
			series : {
				shadowSize : 0
			},
			grid : {
				hoverable : true,
				clickable : true,
				tickColor : "#f9f9f9",
				borderWidth : 1,
				borderColor : "rgba(65, 80, 95, 0.07)"
			},
			tooltip : true,
			colors: colors,
			tooltipOpts : {
				defaultTheme : false
			},
			legend : {
				position : "ne",
				margin : [0, -32],
				noColumns : 0,
				labelBoxBorderColor : null,
				labelFormatter : function(label, series) {
					// just add some space to labes
					return '' + label + '&nbsp;&nbsp;';
				},
				width : 30,
				height : 2
			},
			yaxis : {
				axisLabel: "Point Value (1000)",
				tickColor : 'rgba(65, 80, 95, 0.07)',
				font : {
					color : '#8391a2'
				}
			},
			xaxis : {
				axisLabel: "Daily Hours",
				ticks: ticks,
				tickColor : 'rgba(65, 80, 95, 0.07)',
				font : {
					color : '#8391a2'
				}
			}
		};

		$.plot($(selector), data, options);
	};

    //
    // Sales Analytics
    //
    var colors = ['#1abc9c', '#4a81d4'];
    var dataColors = $("#sales-analytics").data('colors');
    if (dataColors) {
        colors = dataColors.split(",");
    }

    var options = {
        series: [{
            name: '그룹',
            type: 'column',
            data: [1.5, 1.7, 1.9, 1.5]
        }, {
            name: '평균',
            type: 'line',
            data: [1.7, 1.7, 1.7, 1.8]
        }],
        chart: {
            height: 378,
            type: 'line',
        },
        stroke: {
            width: [2, 3]
        },
        plotOptions: {
            bar: {
                columnWidth: '50%'
            }
        },
        colors: colors,
        dataLabels: {
            enabled: true,
            enabledOnSeries: [1]
        },
        labels: ['팀1','팀2','팀3','팀4'],
        xaxis: {
            type: 'string'
        },
        legend: {
            offsetY: 7,
        },
        grid: {
            padding: {
            bottom: 20
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'light',
                type: "horizontal",
                shadeIntensity: 0.25,
                gradientToColors: undefined,
                inverseColors: true,
                opacityFrom: 0.75,
                opacityTo: 0.75,
                stops: [0, 0, 0]
            },
        },
        yaxis: [{
            title: {
                text: 'Net Revenue',
            },

        }, {
            opposite: true,
            title: {
                text: 'Number of Sales'
            }
        }]
    };

    var chart = new ApexCharts(document.querySelector("#sales-analytics"), options);
    chart.render();

    //Pie Chart
    var colors = ["#f412fb", "#4a81d4", "#1abc9c", "#1612fb", "#ba32fb"];
    var dataColors = $("#pie-chart").data('colors');
    if (dataColors) {
        colors = dataColors.split(",");
    }
    c3.generate({
        bindto: '#pie-chart',
        data: {
            columns: [
                ['팀1', 15],
                ['팀2', 23],
                ['팀3', 17],
                ['팀4', 12],
                ['팀5', 30]
            ],
            type : 'pie'
        },
        color: {
            pattern: colors
        },
        pie: {
            label: {
              show: false
            }
        }
    });

    //Combine graph data
    var groups = [[0, 1.5], [1, 1.7]];
    var average = [[0, 1.7], [1, 1.7]];
    var ticks = [[0, "1팀"], [1, "2팀"]];
    var combinelabels = ["그룹", "평균"];
    var combinedatas = [groups, average];
    var colors = ['#f1556c','#1abc9c'];
    var dataColors = $("#combine-chart").data('colors');
    if (dataColors) {
        colors = dataColors.split(",");
    }
    createCombineGraph("#combine-chart", ticks, combinelabels, combinedatas, colors);



    var colors = ['#1abc9c','#4a81d4'];
    var dataColors = $("#roated-chart").data('colors');
    if (dataColors) {
        colors = dataColors.split(",");
    }
    c3.generate({
        bindto: '#roated-chart',
        data: {
            columns: [
                ['상담원', 1.8, 0.4, 5.3, 1.3, 2.1, 0.5]
            ],
            types: {
                상담원: 'bar'
            }
        },
        color: {
            pattern: colors
        },
        axis: {
            rotated: true,
            x: {
            type: 'categorized'
            }
        }
    });

    
    var DrawSparkline = function() {
        // Line Chart
        var colors = ['#00acc1', '#f1556c'];
        var dataColors = $("#lifetime-sales").data('colors');
        if (dataColors) {
            colors = dataColors.split(",");
        }
        $('#lifetime-sales').sparkline([0, 23, 43, 35, 44, 45, 56, 37, 40], {
            type: 'line',
            width: "100%",
            height: '220',
            chartRangeMax: 50,
            lineColor: colors[0],
            fillColor: hexToRGB(colors[0], 0.3),
            highlightLineColor: 'rgba(0,0,0,.1)',
            highlightSpotColor: 'rgba(0,0,0,.2)',
            maxSpotColor: false,
            minSpotColor: false,
            spotColor: false,
            lineWidth: 1
        });

        $('#lifetime-sales').sparkline([25, 23, 26, 24, 25, 32, 30, 24, 19], {
            type: 'line',
            width: "100%",
            height: '220',
            chartRangeMax: 40,
            lineColor: colors[1],
            fillColor: hexToRGB(colors[1], 0.3),
            composite: true,
            highlightLineColor: 'rgba(0,0,0,.1)',
            highlightSpotColor: 'rgba(0,0,0,.2)',
            maxSpotColor: false,
            minSpotColor: false,
            spotColor: false,
            lineWidth: 1
        });

        // Bar Chart
        var colors = ['#00acc1'];
        var dataColors = $("#income-amounts").data('colors');
        if (dataColors) {
            colors = dataColors.split(",");
        }
        $('#income-amounts').sparkline([3, 6, 7, 8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], {
            type: 'bar',
            height: '220',
            barWidth: '10',
            barSpacing: '3',
            barColor: colors
        });

        // Pie Chart
        var colors = ['#00acc1','#4b88e4','#e3eaef','#fd7e14'];
        var dataColors = $("#total-users").data('colors');
        if (dataColors) {
            colors = dataColors.split(",");
        }
        $('#total-users').sparkline([20, 40, 30, 10], {
            type: 'pie',
            width: '220',
            height: '220',
            sliceColors: colors
        });
    };
    
    DrawSparkline();
    
    var resizeChart;

    $(window).resize(function(e) {
        clearTimeout(resizeChart);
        resizeChart = setTimeout(function() {
            DrawSparkline();
        }, 300);
    });
});

// Vector map
//various examples
var colors = ['#6658dd'];
var dataColors = $("#world-map-markers").data('colors');
if (dataColors) {
    colors = dataColors.split(",");
}
$('#world-map-markers').vectorMap({
    map : 'world_mill_en',
    normalizeFunction : 'polynomial',
    hoverOpacity : 0.7,
    hoverColor : false,
    regionStyle : {
        initial : {
            fill : '#ced4da'
        }
    },
     markerStyle: {
        initial: {
            r: 9,
            'fill': colors[0],
            'fill-opacity': 0.9,
            'stroke': '#fff',
            'stroke-width' : 7,
            'stroke-opacity': 0.4
        },

        hover: {
            'stroke': '#fff',
            'fill-opacity': 1,
            'stroke-width': 1.5
        }
    },
    backgroundColor : 'transparent',
    markers : [{
        latLng : [41.90, 12.45],
        name : 'Vatican City'
    }, {
        latLng : [43.73, 7.41],
        name : 'Monaco'
    }, {
        latLng : [-0.52, 166.93],
        name : 'Nauru'
    }, {
        latLng : [-8.51, 179.21],
        name : 'Tuvalu'
    }, {
        latLng : [43.93, 12.46],
        name : 'San Marino'
    }, {
        latLng : [47.14, 9.52],
        name : 'Liechtenstein'
    }, {
        latLng : [7.11, 171.06],
        name : 'Marshall Islands'
    }, {
        latLng : [17.3, -62.73],
        name : 'Saint Kitts and Nevis'
    }, {
        latLng : [3.2, 73.22],
        name : 'Maldives'
    }, {
        latLng : [35.88, 14.5],
        name : 'Malta'
    }, {
        latLng : [12.05, -61.75],
        name : 'Grenada'
    }, {
        latLng : [13.16, -61.23],
        name : 'Saint Vincent and the Grenadines'
    }, {
        latLng : [13.16, -59.55],
        name : 'Barbados'
    }, {
        latLng : [17.11, -61.85],
        name : 'Antigua and Barbuda'
    }, {
        latLng : [-4.61, 55.45],
        name : 'Seychelles'
    }, {
        latLng : [7.35, 134.46],
        name : 'Palau'
    }, {
        latLng : [42.5, 1.51],
        name : 'Andorra'
    }, {
        latLng : [14.01, -60.98],
        name : 'Saint Lucia'
    }, {
        latLng : [6.91, 158.18],
        name : 'Federated States of Micronesia'
    }, {
        latLng : [1.3, 103.8],
        name : 'Singapore'
    }, {
        latLng : [0.33, 6.73],
        name : 'SÃ£o TomÃ© and PrÃ­ncipe'
    }]
});

/* utility function */

function hexToRGB(hex, alpha) {
    var r = parseInt(hex.slice(1, 3), 16),
        g = parseInt(hex.slice(3, 5), 16),
        b = parseInt(hex.slice(5, 7), 16);

    if (alpha) {
        return "rgba(" + r + ", " + g + ", " + b + ", " + alpha + ")";
    } else {
        return "rgb(" + r + ", " + g + ", " + b + ")";
    }
}