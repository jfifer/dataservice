<?php require_once("php/dbconn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>2015 Customer Overview</title>
  <meta charset="utf-8">
      <link href='https://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>    <!-- Color... -->

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../testStuff/dataTables_ASC_DESC/css.css">
  <link rel="stylesheet" type="text/css" href="css/custom_style.css">

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
</head>

<body>

<!-- Navigation -->


<div class="col-xs-12 col-sm-6 col-lg-8">
<img class="logo" src="img/site_logo2.png" height="95px;" width="475px;">
</div>
<br><br><br><br><br><br>
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
        <h1 class="page-header">2015<small> Customer Overview </small>
            <!-- <small><?php echo date('l jS \of F Y h:i:s A'); ?></small> -->
        </h1>
    </div>
</div>
<!-- /.row -->


<table id="table1" class="display" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th><small>Reseller Id</small></th>
        <th><small>Customer Name</small></th>
        <th><small>Account Id</small></th>
        <th><small>Activation Date</small></th>
        <!-- <th><small>User Count</small></th> -->
      </tr>
    </thead>
    <tbody>

<?php
$sql="SELECT c.resellerId,
             c.companyName,
             c.accountId,
             c.originalActivationDate
             -- COUNT(userId) as count
       FROM customer c
       -- JOIN user u USING (customerId)
      WHERE c.statusId NOT IN (2,3)
        AND c.originalActivationDate <= '2016-01-01'
        AND c.companyName NOT LIKE '%test%'
        AND c.companyName NOT LIKE '%demo%'
        AND c.companyName NOT LIKE '%Test%'
        AND c.companyName NOT LIKE '%Demo%'
        -- DEMO ONLY!!
        LIMIT 1000";
      // GROUP BY 2";


if ( $result=mysqli_query($conn,$sql) ) {

  while ($row=mysqli_fetch_assoc($result)) {

    $resellerId = $row['resellerId'];
    $companyName = $row['companyName'];
    $accountId = $row['accountId'];
    $originalActivationDate = $row['originalActivationDate'];
    // $userCount = $row['count'];

   echo "<tr>".
           "<td>".$resellerId."</td>".
           "<td>".$companyName."</td>".
           "<td>".$accountId."</td>".
           "<td>".$originalActivationDate."</td>"."

         </tr>";

  }
}

mysqli_close($conn);

?>

    </tbody>
  </table>
</div> <!-- END CONTAINER -->


  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../testStuff/dataTables_ASC_DESC/dataTable.js"></script>
  <script type="text/javascript" src="js/custom_js/main.js"></script>

</body>

</html>