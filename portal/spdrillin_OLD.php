<?php 
include('php/dbconn.php'); 



  $sp = $_SERVER['QUERY_STRING'];
  $clean = urldecode($sp);
  $resellerId = substr($clean, -1);



?>
<!DOCTYPE html>
<html>

  <link href='https://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'> 
  <link rel="stylesheet" type="text/css" href="../testStuff/dataTables_ASC_DESC/css.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">


  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script type="text/javascript" src="http://www.amcharts.com/lib/3/amcharts.js"></script>
  <script type="text/javascript" src="http://www.amcharts.com/lib/3/serial.js"></script>
  <script type="text/javascript" src="http://www.amcharts.com/lib/3/themes/none.js"></script>
  
  <script type="text/javascript" src="js/custom_js/main.js"></script>
  <script type="text/javascript" src="../testStuff/dataTables_ASC_DESC/jquery-1.11.js"></script>
  <script type="text/javascript" src="../testStuff/dataTables_ASC_DESC/dataTable.js"></script>
  
<script type="text/javascript">

var chartConfig = {
        "type": "serial",
        "theme": "none",
        "dataProvider": [],
        "valueAxes": [{
        "gridColor": "blue", //#FFFFFF",
            "gridAlpha": 0.1,
            "dashLength": 0
    }],
        "gridAboveGraphs": true,
        "startDuration": 1,
        "graphs": [],
        "chartCursor": {
        "categoryBalloonEnabled": true,
            "cursorAlpha": 0,
            "zoomable": true
    },
        "categoryField": "category",
        "categoryAxis": {
        "gridPosition": "start",
            "gridAlpha": 0
    },
        "exportConfig": {
        "menuTop": 0,
            "menuItems": [{
            "icon": '/lib/3/images/export.png',
                "format": 'png'
        }]
    }
};

jQuery(document).ready(function () {
    
    // get categories
    jQuery('#data thead th').each(function (index) {
        if (index) { // skip the first column
            chartConfig.graphs.push({
                    "balloonText": "DID Count: <b>[[value]]</b>",
                    "fillAlphas": 0.8,
                    "lineAlpha": 0.2,
                    "type": "column",
                    "valueField": "value" + index
            });
        }
    });
    
    // get data points
    jQuery('#data tbody tr').each(function (index) {
        var dataPoint = {};
        jQuery(this).find('th,td').each(function (index2) {
            if (jQuery(this).is('th')) { // category
                dataPoint.category = this.innerHTML;
            }
            else {
            	
                dataPoint[ 'value' + index2] = Number(this.innerHTML);
            }
        });
        chartConfig.dataProvider.push(dataPoint);

    });
    
    // make the chart
    var chart = AmCharts.makeChart("chartdiv", chartConfig);
});

</script>

  <script type="text/javascript">
      $(document).ready(function() {
              $('#data').DataTable( {
                  "order": [[ 4, "asc" ]]
              } );
          } );
   </script>

<style type="text/css">

body {
    /*font-family: Verdana;*/
    font-size: 12px;
    padding: 10px;
}
#chartdiv {
    width : 100%;
    height : 500px;
    font-size : 11px;
}
#data, #data th, #data td {
    border: 1px solid #ccc;
    padding: 10px;
}
#data th {
    font-weight: bold;
    background-color: #eee;
}
  
</style>

<style type="text/css">

  .logo {
    margin-top: 10px;
    margin-left: 20px;
    float: left;
  }

  .container-fluid {
    background-color: #0076a3;
  }

  .navvy {
    color: #FFF !important;
  }

  .active {
    background-color: #FFF !important;
  }

  /*.page-header {
    font-family: 'Play', sans-serif;
  }*/

  body {
    font-family: 'Play', sans-serif;
  }

  </style>


<body>

<!-- Navigation -->


<div class="col-xs-12 col-sm-6 col-lg-8">
<img class="logo" src="img/site_logo2.png" height="95px;" width="475px;">
</div>
<br><br><br><br><br><br><br>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a class="active" href="index.php">Home</a></li>
        <li><a class="navvy" href="reports/reports_index.php">Reports</a></li>
        <li><a class="navvy" href="dashboards/dashboards_index.php">Dashboards</a></li>
        <li><a class="navvy" href="request_data.php">Request Data</a></li>
      </ul>
    </div>
  </div>
</nav> 

<!-- END NAV -->




<div class="container">

<!-- Page Heading -->
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Services Overview 
      <small><?php echo date('l jS \of F Y h:i:s A'); ?></small>
    </h1>
  </div>
</div>
<!-- /.row -->	


<div id="chartdiv"></div>

<table id="data">
    <thead>
        <tr>
        	<th>Customer</th>
        	<th>Customer Id</th>
        	<th>DID Count</th>
            <th>User Count</th>
            <th>Extensions</th>
            <th>Mailboxes</th>
            <th>Auto Attendants</th>
            <th>Conference Bridges</th>


        </tr>
    </thead>
    <tbody>

<?php

$conn = new mysqli($HOST,$DBUSER,$DBPWD,$DBNAME);
$sql1='call getDidReport();';


if ( $result=mysqli_query($conn,$sql1) ) {

  while ($row=mysqli_fetch_row($result)) {

   echo "
         <tr>
             <th>".$row[0]."</a></th>".
            "<td>".$row[1]."</td>".
            "<td>".$row[2]."</td>".
            "<td>".$row[3]."</td>".
            "<td>".$row[4]."</td>".
            "<td>".$row[5]."</td>".
            "<td>".$row[6]."</td>".
            "<td>".$row[7]."</td>".
         "</tr>";

 }
}

mysqli_close($conn);
    
?> 

</tbody>
</table>

</div>


</body>

</html>