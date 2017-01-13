<?php
require("dbconn.php");
$conn = new mysqli($HOST,$DBUSER,$DBPWD,$DBNAME);
$sql='select CAST(v_date AS DATE) as "date",
             v_count as "count"
        from voiceaxis.seatsOverTimeSpLevel
       where v_count !=0';

function getSeatsOverTime($conn, $sql) {

   if ( $result=mysqli_query($conn,$sql) ) {

     while ( $row=mysqli_fetch_array($result) ) {

       $stuff[] = array(
                    "date" => $row["date"],
                    "count" => (int) $row["count"]
                  );
      }

      $chartData = json_encode($stuff);
      return $chartData;
      //echo $chartData;
   }
mysqli_close($conn);
}
$chartData = getSeatsOverTime($conn,$sql);
?>