<?php
require("dbconn.php");
$conn = new mysqli($HOST,$DBUSER,$DBPWD,$DBNAME);
$sql='call getSeats()';

function getSeats($conn, $sql) {

   if ( $result=mysqli_query($conn,$sql) ) {

     while ( $row=mysqli_fetch_array($result) ) {

       $data[] = array(
                    "date" => $row["date"],
                    "value" => $row["value"]
                  );
      }

      $clean = json_encode($data);
      return $clean;
   }
mysqli_close($conn);
}
$clean = getSeats($conn,$sql);
?>