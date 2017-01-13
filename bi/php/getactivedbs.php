<?php
$conn = new mysqli($HOST,$DBUSER,$DBPWD,$DBNAME);
$dbs='select schema_name
        from information_schema.schemata
       where schema_name like "two%"
          or schema_name like "voice%"';

function getDbs($conn,$dbs) {

  if ($result=mysqli_query($conn,$dbs) ) {
    while ($row=mysqli_fetch_assoc($result)) {
     $schemaName = $row['schema_name'];
       echo "<ul>".
               "<li><small><a href='#'>".$schemaName."</small></a></li>".
              "</ul>";
    }
  }
}
getDbs($conn,$dbs);
?>

