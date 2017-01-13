<?php //require_once("../../php/dbconn.php"); ?>
<?php require_once("../../php/dbconn1.php"); ?>
<?php session_start(); $_SESSION["DBCONN"] = "iTop";?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Servers</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../../../testStuff/dataTables_ASC_DESC/css.css">

  <link href='https://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>    
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="../../js/jquery.js"></script>
  <script type="text/javascript" src="../../js/bootstrap.js"></script>

  <script type="text/javascript" src="../../../testStuff/dataTables_ASC_DESC/jquery-1.11.js"></script>
  <script type="text/javascript" src="../../../testStuff/dataTables_ASC_DESC/dataTable.js"></script>

  <script>

    $(document).ready(function() {
        $('#table1').DataTable( {
            "order": [[ 3, "desc" ]]
        } );
    } );

</script>


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

     .portfolio-item {
        margin-bottom: 3px;
     }

     body {
       font-family: 'Play', sans-serif;
     }

  </style>



</head>

<body>



<div class="col-xs-12 col-sm-6 col-lg-8">
  <img class="logo" src="../../img/site_logo2.png" height="95px;" width="475px;">
</div>
<br><br><br><br><br><br>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a class="navvy" href="../../index.php">Home</a></li>
        <li><a class="active" href="../reports_index.php">Reports</a></li>
        <li><a class="navvy" href="../../dashboards/dashboards_index.php">Dashboards</a></li>
        <li><a class="navvy" href="../../request_data.php">Request Data</a></li>
      </ul>
    </div>
  </div>
</nav> 

<div class="container">



<?php

$count="SELECT COUNT(*) 
          FROM _itopview_DatacenterDevice;";


if ( $result=mysqli_query($conn,$count) ) {

  $row_cnt = mysqli_fetch_array($result);
  $row_cnt = $row_cnt[0];
}
?>

  <h2>Servers <small><?php echo date('l jS \of F Y h:i:s A'); ?></small></h2>
  <p>*Datacenter Servers </p><small>Row Count: <?php echo $row_cnt; ?></small>           
  <div style="overflow: auto;">
  <table id="table1" class="display" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Name</th>
        <th>Serial Number</th>
        <th>Location</th>
        <th>Model</th>
        <th>Brand Name</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>


<?php
$conn = new mysqli($iHOST,$iDBUSER,$iDBPWD,$iDBNAME);


$sql="SELECT name,
       serialnumber,
       location_name,
       model_name,
       brand_name,
       status
FROM _itopview_DatacenterDevice;";

if ( $result=mysqli_query($conn,$sql) ) {

  while ($row=mysqli_fetch_array($result)) {
  
  echo "<tr>".
        "<td>".$row['name']."</td>".
        "<td>".$row['serialnumber']."</td>".
        "<td>".$row['location_name']."</td>".
        "<td>".$row['model_name']."</td>".
        "<td>".$row['brand_name']."</td>".
        "<td>".$row['status']."</td>"."
        
      </tr>";
      
  }
}


    
?> 
  </tbody> 
  </table>

</div> <!-- overflow div -->

</div> <!-- CONTAINER END -->

</body>


</html>



 <!-- Begin Navbar -->
<!-- <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".upper-navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      
          <a class="navbar-brand" href="#">Filter By:</a>
      
        <form class="navbar-form pull-left" role="search" method="get" id="searchform" action="servers_search.php">
        <div class="input-group">
          <div class="input-group-btn">
                  <p class="btn">
                    <select  id="selector" name="customField">
                      <option value=""></option>
                      <option value="name">Name</option>
                      <option value="serialnumber">Serial Number</option>
                      <option value="location">Location</option>
                      <option value="model">Model</option>
                      <option value="brandname">Brand Name</option>
                      <option value="status">Status</option>
                      <option value="all">All</option>
                    </select>
                  </p>

          </div>
          <input type="text" class="form-control" value="" placeholder="Search..." name="filter" id="filter">
          <div class="input-group-btn">
            <button type="submit" id="searchsubmit" value="Search" class="btn btn-success"><span class="glyphicon glyphicon-search"></span></button>
          </div>
        </div>
        </form>    
    </div>
      <div class="collapse navbar-collapse upper-navbar">      
          <ul id="menu-topmenu" class="nav navbar-nav navbar-right">
            <li id="menu-item-1"><a href="../../index.php">Home</a></li>
            <li id="menu-item-2"><a href="infra_index.php">Back</a></li>
          </ul>   
      </div>
  </div>
</nav> -->
<!-- /.navbar -->