/*
 Template Name: Veltrix - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesbrand
 File: Flot chart Init
 */


!function($) {
    "use strict";

    var FlotChart = function() {
        this.$body = $("body")
        this.$realData = []
    };

    //creates plot graph
    FlotChart.prototype.createPlotGraph = function(selector, data1, data2, data3, labels, colors, borderColor, bgColor) {
      //shows tooltip
      function showTooltip(x, y, contents) {
        $('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css( {
          position: 'absolute',
          top: y + 5,
          left: x + 5
        }).appendTo("body").fadeIn(200);
      }

      $.plot($(selector),
          [ { data: data1,
            label: labels[0],
            color: colors[0]
          },
          { data: data2,
            label: labels[1],
            color: colors[1]
          },
          { data: data3,
              label: labels[2],
              color: colors[2]
          }
        ],
          {
              series: {
                  lines: {
                      show: true,
                      fill: true,
                      lineWidth: 2,
                      fillColor: {
                          colors: [{opacity: 0.5},
                              {opacity: 0.5}
                          ]
                      }
                  },
                  points: {
                      show: false
                  },
                  shadowSize: 0
              },
              legend: {
                  position: 'nw'
              },
              grid: {
                  hoverable: true,
                  clickable: true,
                  borderColor: borderColor,
                  borderWidth: 1,
                  labelMargin: 10,
                  backgroundColor: bgColor
              },
              yaxis: {
                  min: 0,
                  max: 300,
                  color: 'rgba(0,0,0,0.1)'
              },
              xaxis: {
                  color: 'rgba(0,0,0,0.1)'
              },
              tooltip: true,
              tooltipOpts: {
                  content: '%s: Value of %x is %y',
                  shifts: {
                      x: -60,
                      y: 25
                  },
                  defaultTheme: false
              }
          });
    },
    //end plot graph

    //creates Pie Chart
    FlotChart.prototype.createPieGraph = function(selector, labels, datas, colors) {
        var data = [{
            label: labels[0],
            data: datas[0]
        }, {
            label: labels[1],
            data: datas[1]
        }, {
            label: labels[2],
            data: datas[2]
        }];
        var options = {
            series: {
                pie: {
                    show: true
                }
            },
            legend : {
				show : true
			},
			grid : {
				hoverable : true,
				clickable : true
			},
			colors : colors,
			tooltip : true,
			tooltipOpts : {
				content : "%s, %p.0%"
			}
        };

        $.plot($(selector), data, options);
    },

    //returns some random data
    FlotChart.prototype.randomData = function() {
        var totalPoints = 300;
        if (this.$realData.length > 0)
            this.$realData = this.$realData.slice(1);

      // Do a random walk
      while (this.$realData.length < totalPoints) {

        var prev = this.$realData.length > 0 ? this.$realData[this.$realData.length - 1] : 50,
          y = prev + Math.random() * 10 - 5;

        if (y < 0) {
          y = 0;
        } else if (y > 100) {
          y = 100;
        }

        this.$realData.push(y);
      }

      // Zip the generated y values with the x values
      var res = [];
      for (var i = 0; i < this.$realData.length; ++i) {
        res.push([i, this.$realData[i]])
      }

      return res;
    },

    FlotChart.prototype.createRealTimeGraph = function(selector, data, colors) {
        var plot = $.plot(selector, [data], {
          colors: colors,
          series: {
            lines: {
              show: true,
              fill: true,
              lineWidth: 2,
              fillColor: {
                colors: [{
                  opacity: 0.45
                }, {
                  opacity: 0.45
                }]
              }
            },
            points: {
              show: false
            },
            shadowSize: 0
          },
          grid : {
				show : true,
				aboveData : false,
				color : '#dcdcdc',
				labelMargin : 15,
				axisMargin : 0,
				borderWidth : 0,
				borderColor : null,
				minBorderMargin : 5,
				clickable : true,
				hoverable : true,
				autoHighlight : false,
				mouseActiveRadius : 20
			},
			tooltip : true, //activate tooltip
			tooltipOpts : {
				content : "Value is : %y.0" + "%",
				shifts : {
					x : -30,
					y : -50
				}
			},
			yaxis : {
				min : 0,
				max : 100,
				color : 'rgba(0,0,0,0.1)'
			},
			xaxis : {
				show : false
			}
        });

        return plot;
    },
    //creates Pie Chart
    FlotChart.prototype.createDonutGraph = function(selector, labels, datas, colors) {
        var data = [{
            label: labels[0],
            data: datas[0]
        }, {
            label: labels[1],
            data: datas[1]
        }, {
            label: labels[2],
            data: datas[2]
        },
        {
            label: labels[3],
            data: datas[3]
        }, {
            label: labels[4],
            data: datas[4]
        }
        ];
        var options = {
            series: {
                pie: {
                    show: true,
                    innerRadius: 0.7
                }
            },
            legend : {
				show : true,
				labelFormatter : function(label, series) {
					return '<div style="font-size:14px;">&nbsp;' + label + '</div>'
				},
				labelBoxBorderColor : null,
				margin : 50,
				width : 20,
				padding : 1
			},
			grid : {
				hoverable : true,
				clickable : true
			},
			colors : colors,
			tooltip : true,
			tooltipOpts : {
				content : "%s, %p.0%"
			}
        };

        $.plot($(selector), data, options);
    },

        //initializing various charts and components
        FlotChart.prototype.init = function() {
          //plot graph data
          var desktops = [[0, 50], [1, 130], [2, 80], [3, 70], [4, 180], [5, 105], [6, 250]];
          var laptops = [[0, 80], [1, 100], [2,60], [3, 120], [4, 140], [5, 100], [6, 105]];
          var tablets = [[0, 20], [1, 80], [2, 70], [3, 140], [4, 250], [5, 80], [6, 200]];
          var plabels = ["Desktops","Laptops","Tablets"];
          var pcolors = ['#f0f1f4', '#3c4ccf', '#02a499'];
          var borderColor = '#f5f5f5';
          var bgColor = '#fff';
          this.createPlotGraph("#website-stats", desktops, laptops, tablets, plabels, pcolors, borderColor, bgColor);

          //Pie graph data
          var pielabels = ["Desktops","Laptops","Tablets"];
          var datas = [20,30, 15];
          var colors = ['#3c4ccf','#02a499', "#ebeff2"];
          this.createPieGraph("#pie-chart #pie-chart-container", pielabels , datas, colors);


            //real time data representation
            var plot = this.createRealTimeGraph('#flotRealTime', this.randomData() , ['#02a499']);
            plot.draw();
            var $this = this;
            function updatePlot() {
                plot.setData([$this.randomData()]);
                // Since the axes don't change, we don't need to call plot.setupGrid()
                plot.draw();
                setTimeout(updatePlot, $( 'html' ).hasClass( 'mobile-device' ) ? 1000 : 1000);
            }
            updatePlot();

            //Donut pie graph data
          var donutlabels = ["Desktops","Laptops","Tablets"];
          var donutdatas = [29,20, 18];
          var donutcolors = ['#f0f1f4', '#3c4ccf', '#02a499'];
          this.createDonutGraph("#donut-chart #donut-chart-container", donutlabels , donutdatas, donutcolors);
        },

    //init flotchart
    $.FlotChart = new FlotChart, $.FlotChart.Constructor = FlotChart

}(window.jQuery),

//initializing flotchart
function($) {
    "use strict";
    $.FlotChart.init()
}(window.jQuery);


