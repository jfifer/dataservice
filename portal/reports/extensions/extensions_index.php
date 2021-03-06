<!DOCTYPE html>
<html lang="en">
<head>
  <title>Extensions Home</title>
  <meta charset="utf-8">

  <!-- Bootstrap Core CSS -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>



<style type="text/css">

.col-md-12 {
  height: 200px;
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
        <li><a class="navvy" href="../../home.php">Home</a></li>
        <li><a class="active" href="../reports_index.php">Reports</a></li>
        <li><a class="navvy" href="../../dashboards/dashboards_index.php">Dashboards</a></li>
        <li><a class="navvy" href="../../request_data.php">Request Data</a></li>
        <li><a class="navvy" href="../../index.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>



<div class="container">
  <!-- <a href="../../index.php"><button class="btn-xs btn-primary"><h4>GO HOME</h4></button></a><a href="../reports_index.php"><button class="btn-xs btn-info" style="margin-left:15px;"><h4>GO BACK</h4></button></a><br><br> -->
  <!-- Projects Row -->

              <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Extensions Home
                    <small><?php echo date('l jS \of F Y h:i:s A'); ?></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="standardExtensions.php">
                    <button class="col-md-12 btn btn-warning"><h2>Standard Extensions</h2></button>
                </a>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="cloudExtensions.php">
                   <button class="col-md-12 btn btn-info"><h2>Cloud Extensions</h2></button>
                </a>
            </div>
             <div class="col-md-4 portfolio-item">
                <a href="sipTrunks.php">
                    <button class="col-md-12 btn btn-success"><h2>Sip Trunks</h2></button>
                </a>
            </div>

        </div>
        <!-- /.row -->


        <!-- row 2 -->
          <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <button class="col-md-12 btn btn-danger"><h2><strike>DID</strike></h2></button>
                </a>
            </div>

            <div class="col-md-4 portfolio-item">
                <a href="pbxLookup.php">
                    <button class="col-md-12 btn btn-success"><h2>PBX Context Lookup</h2></button>
                </a>
            </div>

             <div class="col-md-4 portfolio-item">
                <a href="deviceCount.php">
                    <button class="col-md-12 btn btn-warning"><h2>Device Counts</h2></button>
                </a>
            </div>


        </div>
        <!-- end row 2 -->

  </div>
</div>

  <!-- jQuery -->
    <script src="../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>


</body>
</html>
