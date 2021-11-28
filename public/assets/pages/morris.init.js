/*
 Template Name: Veltrix - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesbrand
 File: Morris chart Init
 */


!function ($) {
    "use strict";

    var MorrisCharts = function () {
    };

        //creates line chart
        MorrisCharts.prototype.createLineChart = function (element, data, xkey, ykeys, labels, lineColors) {
            Morris.Line({
                element: element,
                data: data,
                xkey: xkey,
                ykeys: ykeys,
                labels: labels,
                hideHover: 'auto',
                gridLineColor: '#eef0f2',
                resize: true, //defaulted to true
                lineColors: lineColors,
                lineWidth: 2
            });
        },

        //creates Bar chart
        MorrisCharts.prototype.createBarChart = function (element, data, xkey, ykeys, labels, lineColors) {
            Morris.Bar({
                element: element,
                data: data,
                xkey: xkey,
                ykeys: ykeys,
                labels: labels,
                gridLineColor: '#eef0f2',
                barSizeRatio: 0.4,
                resize: true,
                hideHover: 'auto',
                barColors: lineColors
            });
        },

        //creates area chart
        MorrisCharts.prototype.createAreaChart = function (element, pointSize, lineWidth, data, xkey, ykeys, labels, lineColors) {
            Morris.Area({
                element: element,
                pointSize: 0,
                lineWidth: 0,
                data: data,
                xkey: xkey,
                ykeys: ykeys,
                labels: labels,
                resize: true,
                gridLineColor: '#eee',
                hideHover: 'auto',
                lineColors: lineColors,
                fillOpacity: .6,
                behaveLikeLine: true
            });
        },

        //creates Donut chart
        MorrisCharts.prototype.createDonutChart = function (element, data, colors) {
            Morris.Donut({
                element: element,
                data: data,
                resize: true,
                colors: colors
            });
        },
        //creates Stacked chart
        MorrisCharts.prototype.createStackedChart = function (element, data, xkey, ykeys, labels, lineColors) {
            Morris.Bar({
                element: element,
                data: data,
                xkey: xkey,
                ykeys: ykeys,
                stacked: true,
                labels: labels,
                hideHover: 'auto',
                barSizeRatio: 0.4,
                resize: true, //defaulted to true
                gridLineColor: '#eeeeee',
                barColors: lineColors
            });
        },
        MorrisCharts.prototype.init = function () {

            //create line chart
            var $data = [
                {y: '2012', a: 50, b: 80, c: 20},
                {y: '2013', a: 130, b: 100, c: 80},
                {y: '2014', a: 80, b: 60, c: 70},
                {y: '2015', a: 70, b: 200, c: 140},
                {y: '2016', a: 180, b: 140, c: 150},
                {y: '2017', a: 105, b: 100, c: 80},
                {y: '2018', a: 250, b: 150, c: 200}
            ];
            this.createLineChart('morris-line-example', $data, 'y', ['a', 'b', 'c'], ['Activated', 'Pending', 'Deactivated'], ['#ccc', '#3c4ccf', '#02a499']);

            //creating bar chart
            var $barData = [
                {y: '2011', a: 100, b: 90},
                {y: '2012', a: 75, b: 65},
                {y: '2013', a: 50, b: 40},
                {y: '2014', a: 75, b: 65},
                {y: '2015', a: 50, b: 40},
                {y: '2016', a: 75, b: 65},
                {y: '2017', a: 100, b: 90},
                {y: '2018', a: 90, b: 75}
            ];
            this.createBarChart('morris-bar-example', $barData, 'y', ['a', 'b'], ['Series A', 'Series B'], ['#3c4ccf','#02a499']);

            //creating area chart
            var $areaData = [
                {y: '2012', a: 0, b: 0, c:0},
                {y: '2013', a: 150, b: 45, c:15},
                {y: '2014', a: 60, b: 150, c:195},
                {y: '2015', a: 180, b: 36, c:21},
                {y: '2016', a: 90, b: 60, c:360},
                {y: '2017', a: 75, b: 240, c:120},
                {y: '2018', a: 30, b: 30, c:30}
            ];
            this.createAreaChart('morris-area-example', 0, 0, $areaData, 'y', ['a', 'b', 'c'], ['Series A', 'Series B', 'Series C'], ['#ccc', '#3c4ccf', '#02a499']);

            //creating donut chart
            var $donutData = [
                {label: "Download Sales", value: 12},
                {label: "In-Store Sales", value: 30},
                {label: "Mail-Order Sales", value: 20}
            ];
            this.createDonutChart('morris-donut-example', $donutData, ['#f0f1f4', '#3c4ccf', '#02a499']);

            //creating Stacked chart
            var $stckedData = [
                {y: '2007', a: 45, b: 180},
                {y: '2008', a: 75, b: 65},
                {y: '2009', a: 100, b: 90},
                {y: '2010', a: 75, b: 65},
                {y: '2011', a: 100, b: 90},
                {y: '2012', a: 75, b: 65},
                {y: '2013', a: 50, b: 40},
                {y: '2014', a: 75, b: 65},
                {y: '2015', a: 50, b: 40},
                {y: '2016', a: 75, b: 65},
                {y: '2017', a: 100, b: 90},
                {y: '2018', a: 80, b: 65}
            ];
            this.createStackedChart('morris-bar-stacked', $stckedData, 'y', ['a', 'b'], ['Series A', 'Series B'], ['#3c4ccf', '#f0f1f4']);

        },
        //init
        $.MorrisCharts = new MorrisCharts, $.MorrisCharts.Constructor = MorrisCharts
}(window.jQuery),

//initializing 
    function ($) {
        "use strict";
        $.MorrisCharts.init();
    }(window.jQuery);