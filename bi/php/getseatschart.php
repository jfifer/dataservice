<?php require("getSeatsFun.php"); ?>
<script>
            var clean = <?php echo $clean; ?> ;
            var seats = clean;
            // console.log(clean);
            var chart;

            AmCharts.ready(function () {
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();
                chart.dataProvider = seats;
                chart.categoryField = "date";
                chart.startDuration = 1;
                chart.plotAreaBorderColor = "#DADADA";
                chart.plotAreaBorderAlpha = 1;
                // this single line makes the chart a bar chart
                chart.rotate = false;

                // AXES
                // Category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.gridPosition = "start";
                categoryAxis.gridAlpha = 0.1;
                categoryAxis.axisAlpha = 0;

                // Value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.axisAlpha = 0;
                valueAxis.gridAlpha = 0.1;
                valueAxis.position = "top";
                chart.addValueAxis(valueAxis);

                // GRAPHS
                // first graph
                var graph1 = new AmCharts.AmGraph();
                graph1.type = "column";
                graph1.title = "Seats Overtime";
                graph1.valueField = "value";
                graph1.balloonText = "# Seats:[[value]]";
                graph1.lineAlpha = 0;
                graph1.fillColors = "blue"; //"#ADD981";
                graph1.fillAlphas = 1;
                chart.addGraph(graph1);

                // second graph
                // var graph2 = new AmCharts.AmGraph();
                // graph2.type = "column";
                // graph2.title = "2016 End User Billing";
                // graph2.valueField = "value1";
                // graph2.balloonText = "Billed:[[value]]";
                // graph2.lineAlpha = 0;
                // graph2.fillColors = "#81acd9";
                // graph2.fillAlphas = 1;
                // chart.addGraph(graph2);

                // LEGEND
                var legend = new AmCharts.AmLegend();
                chart.addLegend(legend);

                chart.creditsPosition = "top-right";

                // WRITE
                chart.write("seatcounts");
            });
</script>
<div id="seatcounts" style="width:500px; height:325px;"></div>