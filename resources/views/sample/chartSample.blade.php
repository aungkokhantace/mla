@extends('layouts.master')
@section('title','Sample Chart')
@section('content')

<!-- begin #content -->
<div id="content" class="content">

    <div class="row">
        <h1 class="page-header">Pie Chart Sample</h1>
        <div class="col-md-12">
            <div id="piechartdiv"></div>
        </div>
    </div>

    <div class="row">
        <h1 class="page-header">Line Chart Sample</h1>
        <div class="col-md-12">
            <div id="linechartdiv"></div>
        </div>
    </div>

</div>
<!-- end #content -->
@stop

@section('page_script')
    <script type="text/javascript" language="javascript" class="init">
        $(document).ready(function() {

            //Start Pie Chart
            /*
            (1) need json data
            (2) insert json data into "dataProvider"
            (3) change value of "valueField" as json_encoded key name
            (4) change value of "titleField" as json_encoded key name
            Reference By : www.amcharts.com
             */
            var piechartData = <?php echo json_encode($testForPie) ?>;  //(1)
            var piechart = AmCharts.makeChart( "piechartdiv", {
                "type": "pie",
                "theme": "light",
                "dataProvider": piechartData,   //(2)
                "valueField": "count",  //(3)
                "titleField": "status", //(4)
                "balloon":{
                    "fixedPosition":true
                },
                "outlineAlpha": 0.4,
                "depth3D": 30,
                "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                "angle": 30,
                "export": {
                    "enabled": true,
                    "fileName": "Test Pie Chart",
                    "menu": [ {
                        "class": "export-main",
                        "menu": [ {
                            "label": "Download as image",
                            "menu": [ "PNG", "JPG", "SVG", "PDF" ]
                        }, {
                            "label": "Print",
                            "format": "PRINT"
                        } ]
                    } ]
                },
                "listeners": [{
                    "event": "init",
                    "method": function(event) {
                        var chart = event.chart;
                        if (chart.colorField === undefined)
                            chart.colorField = "color";
                        for(var i = 0; i < chart.chartData.length; i++) {
                            if(chart.dataProvider[i].status == "Easy"){
                                chart.dataProvider[i].color = "#63abf3";
                            }
                            else if(chart.dataProvider[i].status == "Medium"){
                                chart.dataProvider[i].color = "#6ce9a5";
                            }
                            else if(chart.dataProvider[i].status == "Difficult"){
                                chart.dataProvider[i].color = "#f57a7d";
                            }
                            else{
                                chart.dataProvider[i].color = "#f2d380";
                            }
                        }
                        chart.validateData();
                        chart.animateAgain();
                    }
                }]
            });
            //End Pie Chart

            //Start Line Chart
            /*
            (1) need json data
            (2) change "dataDateFormat"
            (3) change value of "valueField" as json encoded key name
            (4) change value of "categoryField" as json encoded key name
            (5) insert json data into "dataProvider"
             Reference By : www.amcharts.com
            */
            var chartData = <?php echo json_encode($testForLine) ?>; //(1)
            var chart = AmCharts.makeChart("linechartdiv", {
                "type": "serial",
                "theme": "light",
                "marginRight": 40,
                "marginLeft": 40,
                "autoMarginOffset": 20,
                "mouseWheelZoomEnabled":true,
                "dataDateFormat": "YYYY-MM-DD", //(2)
                "valueAxes": [{
                    "id": "v1",
                    "axisAlpha": 0,
                    "position": "left",
                    "ignoreAxisWidth":true
                }],
                "balloon": {
                    "borderThickness": 1,
                    "shadowAlpha": 0
                },
                "graphs": [{
                    "id": "g1",
                    "balloon":{
                        "drop":false,
                        "adjustBorderColor":false,
                        "color":"#ffffff"
                    },
                    "bullet": "round",
                    "bulletBorderAlpha": 1,
                    "bulletColor": "#FFFFFF",
                    "bulletSize": 5,
                    "hideBulletsCount": 50,
                    "lineThickness": 2,
                    "title": "red line",
                    "useLineColorForBulletBorder": true,
                    "valueField": "count",  //(3)
                    "balloonText": "<span style='font-size:11px;'>[[value]]</span>"
                }],
                "chartScrollbar": {
                    "graph": "g1",
                    "oppositeAxis":false,
                    "offset":30,
                    "scrollbarHeight": 80,
                    "backgroundAlpha": 0,
                    "selectedBackgroundAlpha": 0.1,
                    "selectedBackgroundColor": "#888888",
                    "graphFillAlpha": 0,
                    "graphLineAlpha": 0.5,
                    "selectedGraphFillAlpha": 0,
                    "selectedGraphLineAlpha": 1,
                    "autoGridCount":true,
                    "color":"#AAAAAA"
                },
                "chartCursor": {
                    "pan": true,
                    "valueLineEnabled": true,
                    "valueLineBalloonEnabled": true,
                    "cursorAlpha":1,
                    "cursorColor":"#258cbb",
                    "limitToGraph":"g1",
                    "valueLineAlpha":0.2,
                    "valueZoomable":true
                },
                "valueScrollbar":{
                    "oppositeAxis":false,
                    "offset":50,
                    "scrollbarHeight":10
                },
                "categoryField": "date", //(4)
                "categoryAxis": {
                    "parseDates": true,
                    "dashLength": 1,
                    "minorGridEnabled": true
                },
                "export": {
                    "enabled": true,
                    "fileName": "Line Chart Sample",
                    "menu": [ {
                        "class": "export-main",
                        "menu": [ {
                            "label": "Download as image",
                            "menu": [ "PNG", "JPG", "SVG", "PDF" ]
                        }, {
                            "label": "Print",
                            "format": "PRINT"
                        } ]
                    } ]
                },
                "dataProvider": chartData //(5)
            });

            chart.addListener("rendered", zoomChart);

            zoomChart();

            function zoomChart() {
                chart.zoomToIndexes(chart.dataProvider.length - 40, chart.dataProvider.length - 1);
            }


            AmCharts.checkEmptyData = function(chart) {
                if (0 == chart.dataProvider.length) {
                    // set min/max on the value axis
                    chart.valueAxes[0].minimum = 0;
                    chart.valueAxes[0].maximum = 100;

                    // add dummy data point
                    var dataPoint = {
                        dummyValue: 0
                    };
                    dataPoint[chart.categoryField] = '';
                    chart.dataProvider = [dataPoint];

                    // add label
                    chart.addLabel(0, '50%', 'The chart contains no data', 'center');

                    // set opacity of the chart div
                    chart.chartDiv.style.opacity = 0.5;

                    // redraw it
                    chart.validateNow();
                }
            }

            AmCharts.checkEmptyData(chart);
            //End Line Chart
        });
    </script>
@stop