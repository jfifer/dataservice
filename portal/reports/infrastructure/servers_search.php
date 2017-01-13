<?php require_once("../../php/dbconn1.php"); ?>


<?php
if(isset($_GET["filter"]) ) 
{
  $filter = $_GET["filter"];
}

if(isset($_GET["customField"]) ) {
  $customField = $_GET["customField"];
}

switch ($customField) {
    case 'name':
        //echo "spCompanyName";
        $where = "name LIKE "."'%".$filter."%';";
        //echo $and;
        break;
    case 'serialnumber':
        //echo "customerName";
        $where = "serialnumber LIKE "."'%".$filter."%';";
        //echo $and;
        break;
    case 'location':
        //echo "pbxContext";
        $where = "location_name LIKE "."'%".$filter."%';";
        //echo $and;
        break;
    case 'model':
        //echo "extNum";
        $where = "model_name LIKE "."'%".$filter."%';";
        //echo $and;
        break;
    case 'brandname':
        //echo "";
        $where = "brand_name LIKE "."'%".$filter."%';";
        //echo $and;
        break;
    case 'status':
        //echo "";
        $where = "status LIKE "."'%".$filter."%';";
        //echo $and;
        break;
     case 'all':
        //echo "all";
        $where = "1 = 1;";
}

$sql="SELECT name,
             serialnumber,
             location_name,
             model_name,
             brand_name,
             status
        FROM _itopview_DatacenterDevice
       WHERE ".$where;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Servers</title>
  <meta charset="utf-8">

  <link rel="stylesheet" type="text/css" href="../../../testStuff/dataTables_ASC_DESC/css.css">

  
  <!-- Bootstrap Core CSS -->
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

body { /* Body offset for fixed navbar */
  padding-top: 70px; 
}
 
.navbar .navbar-form { /* Positioning the form */
    padding-top: 0;
    padding-bottom: 0;
    margin-right: 0;
    margin-left: 0;
    border: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
}
 
#searchcategory { /* Dropdown within searchbar */
  width: 100px;
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
 
@media(max-width:767px) {
    body { /* Body offset for fixed navbar for mobile devices */
    padding-top: 140px; 
  }
  
  .navbar .navbar-form {
        width: 100% /* Full width search box for mobile devices */
    }
}
 
 
/* Media queries to adjust form width */
@media(min-width:768px) {
    .navbar-form .input-group>.form-control {
    width: 200px; 
  }
}
 
@media(min-width:992px) {
  .navbar-form .input-group>.form-control {
    width: 270px; 
  }
}
 
@media(min-width:1200px) {
  .navbar-form .input-group>.form-control {
    width: 370px; 
  }
}

</style>

<script type="text/javascript">
$(document).ready(function() {
  
  $("#searchdropdown li a").click(function(){
    console.log("click init success");
    $("#searchcategory").html($(this).text() + ' <span class="caret"></span>');
        $("#searchcategory").val($(this).text());
  });
});
</script>

</head>

<body>

<div class="container">

 <!-- Begin Navbar -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
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
    </div><!-- /.navbar-header -->
      <div class="collapse navbar-collapse upper-navbar">      
          <ul id="menu-topmenu" class="nav navbar-nav navbar-right">
            <li id="menu-item-1"><a href="../../index.php">Home</a></li>
            <li id="menu-item-2"><a href="infra_index.php">Back</a></li>
          </ul>   
      </div><!-- /.navbar-collapse -->
  </div>
</nav>
<!-- /.navbar -->
<?php
$conn = new mysqli($iHOST,$iDBUSER,$iDBPWD,$iDBNAME);


$count="SELECT COUNT(*) 
          FROM _itopview_DatacenterDevice WHERE ".$where;


if ( $result=mysqli_query($conn,$count) ) {

  $row_cnt = mysqli_fetch_array($result);
  $row_cnt = $row_cnt[0];
}
?>

  <h2>Servers <small><?php echo date('l jS \of F Y h:i:s A'); ?></small></h2>
  <p>*Datacenter Servers</p><small>Row Count: <?php echo $row_cnt; ?></small>              
  <div style="overflow: auto;">
  <table class="table">
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


mysqli_close($conn);    
?>  
  </tbody>
  </table>

</div> <!-- overflow div -->

</div> <!-- CONTAINER END -->

</body>


</html>
