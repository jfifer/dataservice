<?php include('php/dbconn.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="amChartsLib/AMcharts/amcharts/amcharts.js" type="text/javascript"></script>
    <script src="amChartsLib/AMcharts/amcharts/serial.js" type="text/javascript"></script>
    <title>BI</title>

  <style>
  .date {
    position: absolute;
    right:0;
    top:0;
      }
   </style>
  </head>
<div class="container">
<body>

  <div class="row">
    <h2></h2><small class="date"><?php echo "<label>".date('l jS \of F Y h:i:s A')."</label>"; ?></small>
  </div>
  <hr></hr>
  <div class="row">
    <!-- <label>Active Databases (3)</label> -->
      <?php // include('php/getactivedbs.php'); ?>
  </div>
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">Metrics</h4>
    </div>
    <div id="collapseOne" class="panel-collapse  " role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <div class="row">
          <label style="margin-left: 5%;">Seats Overtime <small>By Service Provider</small></label> <a href="#" data-toggle="tooltip" title="Summary: A daily count of seats on the platform. The graph does not account for customers that were active and had no active users."><small>Summary</small></a>
          <?php require_once('php/getseatsovertimechart.php'); ?>
        </div>
        <div class="row" style="overflow: auto;">
          <?php // require_once('php/getseatschart.php'); ?>
        </div>
      </div>
    </div>
  </div>

<!--
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
 -->
</body>
</div> <!-- container end -->
</html>


