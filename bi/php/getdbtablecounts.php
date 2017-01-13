<?php
$conn = new mysqli($HOST,$DBUSER,$DBPWD,$DBNAME);
$dbs='select  from information_schema.schemata  where schema_name like "two%" or schema_name like "voice%"';

if ($result=mysqli_query($conn,$dbs) ) {
  while ($row=mysqli_fetch_array($result)) {

       echo "<ul>
               <li><a href='#'>".$row[0]."</a></li>".
            "</ul>";
#            $arrayData[] = array(
#            "dbs" => $row[0]
             #);

  # $cleanData = json_encode($arrayData);
  # print $cleanData;
  }
}
?>

