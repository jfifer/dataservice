<?php require("getSeatsOverTimeFun.php"); ?>
 <script>

            var thisData = <?php echo $chartData;?>;
            var graphIt = thisData;
            // console.log(graphIt);
            // var average = 150;
            var chart;

            AmCharts.ready(function () {
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();
                chart.dataProvider = graphIt; // [{"date":"2014-04-04","count":45}, {"date":"2014-04-06","count":4500}]
                chart.categoryField = "date";
                chart.dataDateFormat = "YYYY-MM-DD";

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true
                categoryAxis.minPeriod = "DD"; // our data is daily, so we set minPeriod to DD
                categoryAxis.dashLength = 1;
                categoryAxis.gridAlpha = 0.15;
                categoryAxis.axisColor = "#DADADA";

                // value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.axisColor = "#DADADA";
                valueAxis.dashLength = 1;
                valueAxis.logarithmic = true; // this line makes axis logarithmic
                chart.addValueAxis(valueAxis);

                // GUIDE for average
                // var guide = new AmCharts.Guide();
                // guide.value = average;
                // guide.lineColor = "#CC0000";
                // guide.dashLength = 4;
                // guide.label = "average";
                // guide.inside = true;
                // guide.lineAlpha = 1;
                // valueAxis.addGuide(guide);


                // GRAPH
                var graph = new AmCharts.AmGraph();
                graph.type = "smoothedLine";
                graph.bullet = "round";
                graph.bulletColor = "#FFFFFF";
                graph.useLineColorForBulletBorder = true;
                graph.bulletBorderAlpha = 1;
                graph.bulletBorderThickness = 2;
                graph.bulletSize = 7;
                graph.title = "Count";
                graph.valueField = "count";
                graph.lineThickness = 2;
                graph.lineColor = "blue" ;//"#00BBCC";
                chart.addGraph(graph);

                // CURSOR
                var chartCursor = new AmCharts.ChartCursor();
                chartCursor.cursorPosition = "mouse";
                chart.addChartCursor(chartCursor);

                // SCROLLBAR
                var chartScrollbar = new AmCharts.ChartScrollbar();
                chartScrollbar.graph = graph;
                chartScrollbar.scrollbarHeight = 30;
                chart.addChartScrollbar(chartScrollbar);

                chart.creditsPosition = "bottom-right";

                // WRITE
                chart.write("seatsOverTime");
            });
        </script>
<div id="seatsOverTime" style="width: 100%; height: 400px;"></div>